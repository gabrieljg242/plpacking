<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['module' => 'user','name' => 'user.create','description' => 'Crear Usuario']);
        Permission::create(['module' => 'user','name' => 'user.read','description' => 'Ver Usuario']);
        Permission::create(['module' => 'user','name' => 'user.update','description' => 'Actualizar Usuario']);
        Permission::create(['module' => 'user','name' => 'user.delete','description' => 'Eliminar Usuario']);
        Permission::create(['module' => 'user','name' => 'user.list','description' => 'Listar Usuario']);
        Permission::create(['module' => 'user','name' => 'user.profile.update','description' => 'Actualizar un Usuario']);

        Permission::create(['module' => 'role','name' => 'role.create','description' => 'Crear Rol']);
        Permission::create(['module' => 'role','name' => 'role.read','description' => 'Ver Rol']);
        Permission::create(['module' => 'role','name' => 'role.update','description' => 'Actualizar Rol']);
        Permission::create(['module' => 'role','name' => 'role.delete','description' => 'Eliminar Rol']);
        Permission::create(['module' => 'role','name' => 'role.list','description' => 'Listar Rol']);

        Permission::create(['module' => 'permission','name' => 'permission.create','description' => 'Crear Rol']);
        Permission::create(['module' => 'permission','name' => 'permission.read','description' => 'Ver Rol']);
        Permission::create(['module' => 'permission','name' => 'permission.update','description' => 'Actualizar Rol']);
        Permission::create(['module' => 'permission','name' => 'permission.delete','description' => 'Eliminar Rol']);
        Permission::create(['module' => 'permission','name' => 'permission.list','description' => 'Listar Rol']);

        Permission::create(['module' => 'client','name' => 'client.list','description' => 'Listar Clientes']);
        Permission::create(['module' => 'client','name' => 'client.show','description' => 'Ver Cliente']);
        Permission::create(['module' => 'client','name' => 'client.pedidos','description' => 'Listar Pedidos']);

        Permission::create(['module' => 'cobranza','name' => 'cobranza.list','description' => 'Listar Cobranza']);
        Permission::create(['module' => 'cobranza','name' => 'cobranza.show','description' => 'Ver Cobranza']);

        // create role
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        $user = User::create([
            'name'      => 'Admin',
            'username'     => 'admin',
            'email'     => 'test@test.com',
            'status'    => 1,
            'password'  => bcrypt('12345678'),
        ]);

        $user->assignRole($role);
    }
}
