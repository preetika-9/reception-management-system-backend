<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['mobile_number' => '9843691713'],
            [
                'name' => 'pritika',
                'password' => Hash::make('password123'),
                'email' => 'pritika@example.com',
            ]
        );

        User::updateOrCreate(
            ['mobile_number' => '9876543210'],
            [
                'name' => 'john_doe',
                'password' => Hash::make('password'),
                'email' => 'hello@example.com',
            ]
        );

    }
}
