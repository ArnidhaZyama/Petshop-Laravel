<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@petshop.test'],
            [
                'name' => 'Admin Petshop',
                'password' => 'password123',
                'role' => 'admin',
            ]
        );
    }
}
