<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bicycle;
use Dompdf\Dompdf;
use PDF;

class BicycleController extends Controller
{   
    public function graficaBicicletas()
    {
        $totalBicicletas = Bicycle::count();
        $totalElectricas = Bicycle::where('tipo', 'Electrica')->count();
        $totalPedal = Bicycle::where('tipo', 'Pedal')->count();

        $porcentajeElectricas = round(($totalElectricas / $totalBicicletas) * 100, 2);
        $porcentajePedal = round(($totalPedal / $totalBicicletas) * 100, 2);

        return view('admin.bicycles.grafica', compact('porcentajeElectricas', 'porcentajePedal'));
    }

    public function generatePDF()
    {
        $bicycles = Bicycle::all();

        $dompdf = new Dompdf();
        $html = view('admin.bicycles.pdf', compact('bicycles'))->render();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return $dompdf->stream('bicycles.pdf');
    }

    public function index()
    {   
        $bicycles = Bicycle::all(); // Obtén todas las bicicletas desde el modelo
        return view('admin.bicycles.index')->with('bicycles', $bicycles);
    }

    public function create()
    {
        // return view('bicycles.create');
    }

    public function store(Request $request)
    {
        $bicycle = new Bicycle();
        $bicycle->id = $request->input('id');
        $bicycle->Estado = $request->input('estado'); // Corrección aquí
        $bicycle->Tipo = $request->input('tipo');
        $bicycle->save();

        return redirect()->route('bicycles.index')->with('success', 'Bicicleta creada exitosamente');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $bicycle = Bicycle::find($id);
        return view('admin.bicycles.edit', compact('bicycle'));

    }

    public function update(Request $request, $id)
    {
        $bicycle = Bicycle::find($id);
        $bicycle->Estado = $request->input('estado');
        $bicycle->Tipo = $request->input('tipo');
        $bicycle->save();

        return redirect()->route('bicycles.index')->with('success', 'Bicicleta actualizada exitosamente');
    }

    public function destroy($id)
    {
        $bicycle = Bicycle::findOrFail($id);
        $bicycle->delete();

        return redirect()->route('bicycles.index')->with('success', 'Bicicleta eliminada exitosamente');
    }
}
