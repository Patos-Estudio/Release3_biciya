<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Cliente;
use Barryvdh\DomPDF\Facade as PDF;

class DescargasController extends Controller
{
    public function generar_pdf()
{
    $cliente = Cliente::all();
    $pdf = PDF::loadView('admin.users.generar_pdf', compact('cliente'));
    return $pdf->download('clientes.pdf');
}
}


