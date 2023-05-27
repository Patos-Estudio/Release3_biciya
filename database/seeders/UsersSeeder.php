<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'wwwwwwe',
            'email' => 'aguirre ',
            'password' => Hash::make('contraseña'),
            'created_at' => now(),
            'updated_at' => now()
        ]);


        
    }
}
