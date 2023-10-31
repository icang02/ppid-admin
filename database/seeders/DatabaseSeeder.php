<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BeritaSeeder::class,
            FormulirSeeder::class,
            InformasiPublikSeeder::class,
            LandingSeeder::class,
            ListInformasiPublikSeeder::class,
            // LaporanSeeder::class,
        ]);

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('uHO@ppid')
        ]);
    }
}
