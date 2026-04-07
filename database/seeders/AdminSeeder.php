<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@smkn4.com'],
            [
                'name' => 'admin',
                'password' => Hash::make('123'),
                'role' => 'admin',
            ]
        );
    }
}
