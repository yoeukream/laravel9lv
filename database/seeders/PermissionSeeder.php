<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        Permission::create(
            ['name' => 'logout.perform','guard_name' =>'web'],
            // User Permissions
            ['name' => 'users.index','guard_name' =>'web'],
            ['name' => 'users.create','guard_name' =>'web'],
            ['name' => 'users.store','guard_name' =>'web'],
            ['name' => 'users.edit','guard_name' =>'web'],
            ['name' => 'users.update','guard_name' =>'web'],
            ['name' => 'users.show','guard_name' =>'web'],
            ['name' => 'users.destroy','guard_name' =>'web'],

            // User Permissions
            ['name' => 'posts.index','guard_name' =>'web'],
            ['name' => 'posts.create','guard_name' =>'web'],
            ['name' => 'posts.store','guard_name' =>'web'],
            ['name' => 'posts.edit','guard_name' =>'web'],
            ['name' => 'posts.update','guard_name' =>'web'],
            ['name' => 'posts.show','guard_name' =>'web'],
            ['name' => 'posts.destroy','guard_name' =>'web'],
        );
    }
}
