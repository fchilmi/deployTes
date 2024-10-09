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
            'namaGambar' => 'KK2ApWa3vJproduk1.png',
            'idProduk' => '1',
        ]);
        Gambar::create([
            'namaGambar' => 'q22gaINTDAproduk2.png',
            'idProduk' => '2',
        ]);
        Gambar::create([
            'namaGambar' => '9cpnCPE8mSproduk3.png',
            'idProduk' => '3',
        ]);
        Gambar::create([
            'namaGambar' => 'Gc6wxUeGa2produk4.png',
            'idProduk' => '4',
        ]);
        Gambar::create([
            'namaGambar' => 'Z3WTgA0T39produk5.png',
            'idProduk' => '5',
        ]);
        Gambar::create([
            'namaGambar' => 'HBih1hFST6produk6.png',
            'idProduk' => '6',
        ]);
        Gambar::create([
            'namaGambar' => 'VcHRi8luyOScreenshot 2024-10-09 153305.png',
            'idProduk' => '6',
        ]);
    }
}
