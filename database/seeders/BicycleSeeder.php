<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Bicycle;

class BicycleSeeder extends Seeder
{
    public function run()
    {
        Bicycle::create([
            'Estado' => 'Excelente',
            'Tipo' => 'Electrica',
        ]);

        Bicycle::create([
            'Estado' => 'Bueno',
            'Tipo' => 'Pedal',
        ]);

        Bicycle::create([
            'Estado' => 'Regular',
            'Tipo' => 'Electrica',
        ]);

        Bicycle::create([
            'Estado' => 'Malo',
            'Tipo' => 'Pedal',
        ]);

        Bicycle::create([
            'Estado' => 'Excelente',
            'Tipo' => 'Electrica',
        ]);

        Bicycle::create([
            'Estado' => 'Bueno',
            'Tipo' => 'Pedal',
        ]);

        Bicycle::create([
            'Estado' => 'Regular',
            'Tipo' => 'Electrica',
        ]);

        Bicycle::create([
            'Estado' => 'Malo',
            'Tipo' => 'Pedal',
        ]);

        Bicycle::create([
            'Estado' => 'Excelente',
            'Tipo' => 'Electrica',
        ]);

        Bicycle::create([
            'Estado' => 'Bueno',
            'Tipo' => 'Pedal',
        ]);

        // $bicycles = [
        //     [
        //         'Estado' => 'Malo',
        //         'Tipo' => 'Pedal',
        //     ],
        //     [
        //         'Estado' => 'Excelente',
        //         'Tipo' => 'Electrica',
        //     ],
        // ];

        // Bicycle::insert($bicycles);
    }
}
