<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estacion;
use Dompdf\Dompdf;
use PDF;

class EstacionController extends Controller
{   
    public function generatePDF()
    {
        $estaciones = Estacion::all();

        $pdf = PDF::loadView('admin.estaciones.pdf', compact('estaciones'));

        return $pdf->download('estaciones.pdf');
    }
    // public function generatePDF()
    // {
    //     $estaciones = Estacion::all();

    //     $dompdf = new Dompdf();
    //     $html = view('admin.estaciones.pdf', compact('estaciones'))->render();
    //     $dompdf->loadHtml($html);
    //     $dompdf->render();

    //     return $dompdf->stream('estaciones.pdf');
    // }
    
    public function index()
    {
        $estaciones = Estacion::all();
        return view('admin.estaciones.index', compact('estaciones'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $estacion = new Estacion();
        $estacion->nombre = $request->input('nombre');
        $estacion->ubicacion = $request->input('ubicacion');
        $estacion->estado = $request->input('estado');
        $estacion->save();

        return redirect()->route('estaciones.index')->with('success', 'Estación creada exitosamente');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $estacion = Estacion::find($id);
        return view('admin.estaciones.edit', compact('estacion'));
    }

    public function update(Request $request, $id)
    {
        $estacion = Estacion::find($id);
        $estacion->nombre = $request->input('nombre');
        $estacion->ubicacion = $request->input('ubicacion');
        $estacion->estado = $request->input('estado');
        $estacion->save();

        return redirect()->route('estaciones.index')->with('success', 'Estación actualizada exitosamente');
    }

    public function destroy($id)
    {
        $estacion = Estacion::findOrFail($id);
        $estacion->delete();

        return redirect()->route('estaciones.index')->with('success', 'Estación eliminada exitosamente');
    }
}
