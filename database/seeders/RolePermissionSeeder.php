<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $ownerRole = Role::create([
            'name' => 'Owner',
        ]);

        $buyerRole = Role::create([
            'name' => 'Buyer'
        ]);

        $user = User::create([
            'name' => 'Fany Pemilik',
            'email' => 'fanny@gmail.com',
            'password' => bcrypt(123123)
        ]);

        $user->assignRole($ownerRole);
    }
}
