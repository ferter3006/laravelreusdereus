<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'player']);
        
        Permission::create(['name' => 'crear'])->assignRole($role1); // asignRole si nomes sera donat a 1 role
        Permission::create(['name' => 'jugar'])->syncRoles([$role1,$role2]); // syncRoles si donarem m'es d'un role (en un array)
    
    }
}
