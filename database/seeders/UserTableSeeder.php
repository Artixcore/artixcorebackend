<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $superAdminRole = Role::where('name', 'superadmin')->first();
        $seoAdminRole = Role::where('name', 'seoadmin')->first();
        $contentWriterRole = Role::where('name', 'content writer')->first();

        // Admin User
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin@example.com'),
        ]);
        $admin->roles()->attach($adminRole);

        // Super Admin User
        $superAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('superadmin@example.com'),
        ]);
        $superAdmin->roles()->attach($superAdminRole);

        // SEO Admin
        $seoAdmin = User::create([
            'name' => 'SEO Admin',
            'email' => 'seoadmin@example.com',
            'password' => Hash::make('seoadmin@example.com'),
        ]);
        $seoAdmin->roles()->attach($seoAdminRole);

        // Content Writer
        $contentWriter = User::create([
            'name' => 'Content Writer',
            'email' => 'contentwriter@example.com',
            'password' => Hash::make('contentwriter@example.com'),
        ]);
        $contentWriter->roles()->attach($contentWriterRole);
    }
}
