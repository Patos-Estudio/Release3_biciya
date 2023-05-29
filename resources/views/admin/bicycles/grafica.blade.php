@extends('layouts.app')

@section('content')
    <div class="container">
        <canvas id="graficaBicicletas"></canvas>
    </div>
    <br>
    <form>
        <div class="modal-footer justify-content-center">
            <a href="{{ route('bicycles.index') }}" class="btn btn-primary">Cerrar</a>
        </div>
    </form>
    </div>
@endsection

@section('scripts')
    @parent
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('graficaBicicletas').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Bicicletas Eléctricas', 'Bicicletas de Pedal'],
                    datasets: [{
                        label: 'Porcentaje de Bicicletas',
                        data: [{{ $porcentajeElectricas }}, {{ $porcentajePedal }}],
                        backgroundColor: ['rgba(54, 162, 235, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                        borderColor: ['rgba(54, 162, 235, 1)', 'rgba(255, 99, 132, 1)'],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
@endsection