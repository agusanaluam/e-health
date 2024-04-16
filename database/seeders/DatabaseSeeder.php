<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'password' => Hash::make('@Dm1nistrator'),
            'role' => 'admin',
        ]);

        \App\Models\Layanan::create([
            'kode' => 'P001',
            'poli' => 'Poli Umum',
            'dokter' => 'dr. Indra',
            'tarif' => 40000,
        ]);
        \App\Models\Layanan::create([
            'kode' => 'P101',
            'poli' => 'Poli Anak',
            'dokter' => 'dr. Andri Sp.A',
            'tarif' => 45000,
        ]);
        \App\Models\Layanan::create([
            'kode' => 'P002',
            'poli' => 'Poli Gigi',
            'dokter' => 'drg. Arif',
            'tarif' => 40000,
        ]);
        \App\Models\Layanan::create([
            'kode' => 'P102',
            'poli' => 'Poli Mata',
            'dokter' => 'dr. Dani Sp.M',
            'tarif' => 50000,
        ]);
        \App\Models\Layanan::create([
            'kode' => 'P103',
            'poli' => 'Poli OBGYN',
            'dokter' => 'dr. Doni Sp.OG',
            'tarif' => 60000,
        ]);
    }
}
