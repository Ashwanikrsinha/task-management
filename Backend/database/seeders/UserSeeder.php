<?php
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Seed one admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@123'),
            'role' => 'admin',
        ]);

        // Seed one regular user
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user@123'),
            'role' => 'user',
        ]);

        // Seed additional users if needed
        // User::factory()->count(10)->create(); // Example for seeding multiple users
    }
}
