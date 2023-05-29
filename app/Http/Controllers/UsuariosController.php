<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Dompdf\Dompdf;
use PDF;
use Spatie\Permission\Models\Role;


// use App\Models\Product;

class UsuariosController extends Controller
{

    public function generatePDF()
    {
        $usuarios = User::all();

        $dompdf = new Dompdf();
        $html = view('admin.users.pdf', compact('usuarios'))->render();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return $dompdf->stream('usuarios.pdf');
    }

    public function index()
    {
        $usuarios = User::all();
        return view('admin.users.index', compact('usuarios'));

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->id = $request->input('id');
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('password');
        $usuario->save();
    
        return redirect()->route('usuarios.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $usuario = User::find($id);
        $roles = Role::all();
        return view('admin.users.edit', compact('usuario','roles')); 
        
    }

    public function update(Request $request, $id)
    {
        $usuario = User::find($id);
        $usuario->name = $request->nombre;
        $usuario->email = $request->email;
        // Actualiza otros campos del usuario si es necesario

        $usuario->save();

        $roles =[];

        if ($request->has('rol_admin')) {
            $adminRole = Role::where('name', 'Admin')->first();
            $roles[] = $adminRole;
        }
    
        if ($request->has('rol_usuario')) {
            $usuarioRole = Role::where('name', 'Usuario')->first();
            $roles[] = $usuarioRole;
        }
    
        $usuario->syncRoles($roles);

        return redirect()->route('usuarios.index');
    }


    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
