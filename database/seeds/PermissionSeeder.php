<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        //Modulo permisos
        Permission::create([
            'name' => 'access_dashboard',
            'description' => 'Acceder al dashboard' // Permiso para acceder al dashboard
        ]);
        // Módulo Permisos
        Permission::create([
            'name' => 'access_permission',
            'description' => 'Gestionar Roles y Permisos' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'list_user',
            'description' => 'Listar usuarios' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'create_user',
            'description' => 'Crear usuarios' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'update_user',
            'description' => 'Modificar usuarios' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'destroy_user',
            'description' => 'Eliminar usuarios' // Permiso para gestionar roles y permisos
        ]);

        Permission::create([
            'name' => 'list_role',
            'description' => 'Listar Roles' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'create_role',
            'description' => 'Crear roles' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'update_role',
            'description' => 'Modificar roles' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'destroy_role',
            'description' => 'Eliminar roles' // Permiso para gestionar roles y permisos
        ]);

        Permission::create([
            'name' => 'list_permission',
            'description' => 'Listar Permisos' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'create_permission',
            'description' => 'Crear Permisos' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'update_permission',
            'description' => 'Modificar Permisos' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'destroy_permission',
            'description' => 'Eliminar Permisos' // Permiso para gestionar roles y permisos
        ]);
        // Módulo Tours
        Permission::create([
            'name' => 'create_tour',
            'description' => 'Visualizar formulario de creación de tour' // Permiso para ver el formulario y ver el listado
        ]);
        Permission::create([
            'name' => 'save_tour',
            'description' => 'Guardar información del tour' // Permiso para guardar una tienda
        ]);

        Permission::create([
            'name' => 'edit_tour',
            'description' => 'Visualizar formulario de edición de tour'
        ]);

        Permission::create([
            'name' => 'update_tour',
            'description' => 'Actualizar datos del tour'
        ]);

        Permission::create([
            'name' => 'destroy_tour',
            'description' => 'Eliminar tour'
        ]);

        Permission::create([
            'name' => 'restore_tour',
            'description' => 'Restaurar tour' 
        ]);
        //Modulo Promocion
        //Modulo Blog
    }
}
