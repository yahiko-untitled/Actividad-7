<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::insert([
            [
                'name' => 'Admon.',
                'email' => 'admon@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tecmilenio',
                'email' => 'tecmilenio@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'teacher',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Estudiante',
                'email' => 'student@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'student',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

