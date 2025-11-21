<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create([
            // 'id_user'  => 'USR001',
            'nama'      => 'Tegar',
            'jabatan'   => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            // 'id_user'  => 'USR001',
            'nama'      => 'Rafi',
            'jabatan'   => 'Karyawan',
            'email'     => 'rafi@gmail.com',
            'password'  => Hash::make('123456'),
        ]);

        User::create([
            // 'id_user'  => 'USR001',
            'nama'      => 'Reza',
            'jabatan'   => 'Karyawan',
            'email'     => 'reza@gmail.com',
            'password'  => Hash::make('123456'),
        ]);
    }
}
