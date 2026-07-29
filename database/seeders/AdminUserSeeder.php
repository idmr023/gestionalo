<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        if (User::where('email', 'admin@gestionalo.pe')->exists()) {
            return;
        }

        User::create([
            'name' => 'Admin Gestionalo',
            'email' => 'admin@gestionalo.pe',
            'password' => Hash::make('gestionalo2024'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);
    }
}
