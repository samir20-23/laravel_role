<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 
use App\Models\User;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'Admin']);
        $userRole = Role::create(['name' => 'User']);

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'samir@gmail.com',
            'password' => bcrypt('samir'),
        ]);

        $admin->assignRole($adminRole);
    }
}
