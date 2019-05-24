<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * General  View Permission
         */
        Permission::create([
            'name'          =>  'Ingresar a Permisos',
            'slug'          =>  'permissions.acc',
            'description'   =>  'Ingresar a la configuración de permisos'
        ]);

        Permission::create([
            'name'          =>  'Ingresar a Permisos Por Rol',
            'slug'          =>  'permissions.rol.acc',
            'description'   =>  'Acceso a la configuración de permisos por rol'
        ]);

        Permission::create([
            'name'          =>  'Ingresar a Permisos por Usuario',
            'slug'          =>  'permissions.user.acc',
            'description'   =>  'Acceso a la configuración de permisos por usuario'
        ]);

        /**
         * Roles
         */
        Permission::create([
            'name'          =>  'Ver Roles',
            'slug'          =>  'permissions.role.read',
            'description'   =>  'Ver lista de Roles'
        ]);

        Permission::create([
            'name'          =>  'Crear Roles',
            'slug'          =>  'permissions.role.create',
            'description'   =>  'Crear Roles'
        ]);

        Permission::create([
            'name'          =>  'Actualizar Roles',
            'slug'          =>  'permissions.role.update',
            'description'   =>  'Editar los Roles'
        ]);

        Permission::create([
            'name'          =>  'Eliminar Roles',
            'slug'          =>  'permissions.role.delete',
            'description'   =>  'Crear Roles'
        ]);
    }
}
