<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Estacion;

class EstacionSeeder extends Seeder
{
    public function run()
    {
        $estaciones = [
            [
                'nombre' => 'La Gotera',
                'ubicacion' => 'Palo Grande',
                'estado' => 'Inactivo',
            ],
            [
                'nombre' => 'El Cable',
                'ubicacion' => 'El Cable',
                'estado' => 'Activo',
            ],
            // Agrega más registros si es necesario
        ];

        foreach ($estaciones as $estacion) {
            Estacion::create($estacion);
        }
    }
}
