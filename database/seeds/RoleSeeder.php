<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        //
        // Role Administrador
        $roleA = Role::create([
            'name' => 'admin',
            'description' => 'Administrador'
        ]);
        $roleM = Role::create([
            'name' => 'mantenedor',
            'description' => 'Resp. de CRUD'
        ]);
        $roleU = Role::create([
            'name' => 'user',
            'description' => 'Usuario' // Clientes
        ]);

        $roleA->givePermissionTo([
            'access_dashboard',
            'access_permission',
            'create_tour',
            'save_tour',
            'edit_tour',
            'update_tour',
            'destroy_tour',
            'restore_tour',

            'list_user',
            'create_user',
            'update_user',
            'destroy_user',
            'list_role',
            'create_role',
            'update_role',
            'destroy_role',
            'list_permission',
            'create_permission',
            'update_permission',
            'destroy_permission',

        ]);

        $roleM->givePermissionTo([
            'access_dashboard',
            'create_tour',
            'save_tour',
            'edit_tour',
            'update_tour',
            'destroy_tour',
            'restore_tour',
        ]);
    }
}
