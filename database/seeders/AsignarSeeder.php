<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;
use App\Models\User;


class AsignarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = 1; // ID del usuario al que deseas asignar el rol
        $user = User::find($userId); // Obtén el usuario por ID

        $adminRole = Role::where('name', 'Admin')->first(); // Obtén el rol por nombre

        $user->assignRole($adminRole); // Asigna el rol al usuario
    }
}
