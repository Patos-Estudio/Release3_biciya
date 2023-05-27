<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usuarios = User::all();
        
        return view('admin.users.index', compact('usuarios'));
    }

    public function store(Request $request)
    {
        dd($request->all());    
        die();
    }
}
