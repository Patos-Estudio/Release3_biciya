<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' =>'Admin']);
        $role2 = Role::create(['name' =>'Usuario']);

        Permission::create(['name' =>'admin.users.index'])->assignRole($role1);
        Permission::create(['name' =>'admin.users.index.create'])->assignRole($role1);
        Permission::create(['name' =>'admin.users.index.edit'])->assignRole($role1);
        Permission::create(['name' =>'admin.users.index.destroy'])->assignRole($role1);
        Permission::create(['name' =>'acceso.acceso'])->assignRole($role2);
    }
}
