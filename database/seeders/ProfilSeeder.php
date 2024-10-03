<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\profil;

class profilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        profil::create([
            'namaPerusahaan' => 'Filter LOOOHH',
            'alamatToko'    => 'Margomulyo Indah',
            'alamatGudang'  => 'Margomulyo Gudang e',
            'deskripsiPerusahaan' => 'Ini Perusahaan Filter LOOOHH'
        ]);
    }
}
