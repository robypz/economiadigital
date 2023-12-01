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
        $admin = User::create([
            'name' => 'Administrador',
            'last_name' => 'Administrador',
            'dni' => 'V12345678',
            'email' => 'admin@economiadigital.com',
            'password' => Hash::make('password'),
        ]);

        $admin->assignRole('admin');

        $teacher = User::create([
            'name' => 'Profesor',
            'last_name' => 'Profesor',
            'dni' => 'V12345678',
            'email' => 'teacher@economiadigital.com',
            'password' => Hash::make('password'),
        ]);

        $teacher->assignRole('teacher');

        $student = User::create([
            'name' => 'Estudiante',
            'last_name' => 'Estudiante',
            'dni' => 'V12345678',
            'email' => 'student@economiadigital.com',
            'password' => Hash::make('password'),
        ]);

        $student->assignRole('student');
    }
}
