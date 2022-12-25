<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission as ModelsPermission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Reset cached roles and permissions
        //  app()[PermissionRegistrar::class]->forgetCachedPermissions();
         // create permissions
         $permissions = [
            'logout.perform',
            // Roles
            'roles.index',
            'roles.create',
            'roles.store',
            'roles.edit',
            'roles.update',
            'roles.view',
            'roles.destroy',
            // Permissions
            'permissions.index',
            'permissions.create',
            'permissions.store',
            'permissions.edit',
            'permissions.update',
            'permissions.view',
            'permissions.destroy',

            // Users
            'users.index',
            'users.create',
            'users.store',
            'users.edit',
            'users.update',
            'users.view',
            'users.destroy',
            // Posts
            'posts.index',
            'posts.create',
            'posts.store',
            'posts.edit',
            'posts.update',
            'posts.view',
            'posts.destroy',
// Clients
            'clients.index',
            'clients.create',
            'clients.store',
            'clients.edit',
            'clients.update',
            'clients.view',
            'clients.destroy',


          ];
         foreach ($permissions as $permission) {
             Permission::create(['name' => $permission,'guard_name' =>'web']);
         }
         // create roles and assign existing permissions
         $role1 = Role::create(['name' => 'writer']);
         $role1->givePermissionTo('users.index');
         $role1->givePermissionTo('roles.index');
         $role1->givePermissionTo('permissions.index');


         $role2 = Role::create(['name' => 'admin']);
         foreach ($permissions as $permission) {
             $role2->givePermissionTo($permission);
         }
         $role3 = Role::create(['name' => 'super-admin']);
         // gets all permissions via Gate::before rule; see AuthServiceProvider
         // create demo users
         $user = \App\Models\User::factory()->create([
             'name' => 'Super Admin',
             'email' => 'superadmin@gmail.com',
             'username' => 'superadmin',
            'phone' => '092771244',
            'password' => '111111'
         ]);
         $user->assignRole($role3);
         $user = \App\Models\User::factory()->create([
             'name' => 'Admin User',
             'email' => 'admin@gmail.com',
             'username' => 'admin',
            'phone' => '093771244',
            'password' => '111111'
         ]);
         $user->assignRole($role2);
         $user = \App\Models\User::factory()->create([
             'name' => 'User',
             'email' => 'user@gmail.com',
             'username' => 'user',
            'phone' => '095771244',
            'password' => '111111'
         ]);

         $user->assignRole($role1);
     }





        // Permission::create(
        //     ['name' => 'logout.perform','guard_name' =>'web'],
        //     // User Permissions
        //     ['name' => 'users.index','guard_name' =>'web'],
        //     ['name' => 'users.create','guard_name' =>'web'],
        //     ['name' => 'users.store','guard_name' =>'web'],
        //     ['name' => 'users.edit','guard_name' =>'web'],
        //     ['name' => 'users.update','guard_name' =>'web'],
        //     ['name' => 'users.show','guard_name' =>'web'],
        //     ['name' => 'users.destroy','guard_name' =>'web'],

        //     // User Permissions
        //     ['name' => 'posts.index','guard_name' =>'web'],
        //     ['name' => 'posts.create','guard_name' =>'web'],
        //     ['name' => 'posts.store','guard_name' =>'web'],
        //     ['name' => 'posts.edit','guard_name' =>'web'],
        //     ['name' => 'posts.update','guard_name' =>'web'],
        //     ['name' => 'posts.show','guard_name' =>'web'],
        //     ['name' => 'posts.destroy','guard_name' =>'web'],
        // );
    // }
}
