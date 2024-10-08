<?php

namespace Database\Seeders;

use App\Models\Gambar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GambarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gambar::create([
            'namaGambar' => '1b.png',
            'idProduk' => '1',
        ]);
        Gambar::create([
            'namaGambar' => '2a.png',
            'idProduk' => '2',
        ]);
        Gambar::create([
            'namaGambar' => '3b.png',
            'idProduk' => '3',
        ]);
        Gambar::create([
            'namaGambar' => '4a.png',
            'idProduk' => '4',
        ]);
        Gambar::create([
            'namaGambar' => '5b.png',
            'idProduk' => '5',
        ]);
        Gambar::create([
            'namaGambar' => '6b.png',
            'idProduk' => '6',
        ]);
    }
}
