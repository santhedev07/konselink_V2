<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        $admin = User::create([
            "name"=> "admin",
            "no_induk" => "",
            "email"=> "test@admin.com",
            "phone" => "08123456789",
            "password"=> Hash::make("password"),
        ]);

        $admin->assignRole($adminRole);
    }
}
