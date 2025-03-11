<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;  // Asegúrate de que esta línea esté presente
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::firstOrCreate(
            ['email' => 'admon@robotics.com'],
            [
                'name' => 'Admon.',
                'password' => Hash::make('Adm@2022'),
                'role' => 'admin',
            ]
        );

        User::firstOrCreate(
            ['email' => 'tecmilenio@robotics.com'],
            [
                'name' => 'Tecmilenio',
                'password' => Hash::make('Adm@2022'),
                'role' => 'teacher',
            ]
        );

        User::firstOrCreate(
            ['email' => 'student@robotics.com'],
            [
                'name' => 'Estudiante',
                'password' => Hash::make('Adm@2022'),
                'role' => 'student',
            ]
        );
    }
}
