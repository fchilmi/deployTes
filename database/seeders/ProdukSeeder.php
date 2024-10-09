<?php

namespace Database\Seeders;

use App\Models\produk;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // produk::factory(10)->create();
        // produk::factory(10)->recycle([
        //     Category::all()
        // ])->create();
        produk::create([
            'namaProduk'        => 'Filler Cooling Tower - Nihon Spindle',
            'slug'              => 'filler-cooling-tower-nihon-spindle',
            'hargaProduk'       => '70000',
            'deskripsiProduk'   => 'Filler Untuk CrossFlow Cooling Tower merupakan part yang digunakan dalam mesin Cooling Tower yang berfungsi sebagai filter air. Dapat digunakan untuk berbagai merk Cooling Tower seperti Kuken, Liang Chi, dan lainnya. Menggunakan media jenis film PolyVinyl Chloride (PVC) bentuk vakum adalah pilihan hemat biaya yang sangat baik untuk Cooling Tower Anda.

Ketebalan standar untuk filler ini 12 mil (0,30mm sebelum dibentuk). Ketebalan lain juga tersedia berdasarkan permintaan. Filler ini mudah diikat ke dalam kemasan menggunakan perekat PVC. 

Spesifikasi 
Dimensi : 1000 mm x 1000 mm
                  1000 mm x 2000 mm
Tebal      : 0.35
Warna    : Hitam',
            'namaGambar'   => 'KK2ApWa3vJproduk1.png',
            'category_id' => '3'
        ]);
        produk::create([
            'namaProduk'        => 'Filler Cooling Tower - Shinwa',
            'slug'              => 'filler-cooling-tower-shinwa',
            'hargaProduk'       => '70000',
            'deskripsiProduk'   => 'Filler Untuk CrossFlow Cooling Tower merupakan part yang digunakan dalam mesin Cooling Tower yang berfungsi sebagai filter air. Dapat digunakan untuk berbagai merk Cooling Tower seperti Kuken, Liang Chi, dan lainnya. Menggunakan media jenis film PolyVinyl Chloride (PVC) bentuk vakum adalah pilihan hemat biaya yang sangat baik untuk Cooling Tower Anda.

Spesifikasi : 
Dimensi : 950 mm x 950 mm
Tebal      : 0.35
Warna    : Abu - Abu',
            'namaGambar'   => 'q22gaINTDAproduk2.png',
            'category_id' => '3'
        ]);
        produk::create([
            'namaProduk'        => 'Filler Cooling Tower - Liang Chi',
            'slug'              => 'filler-cooling-tower-liang-chi',
            'hargaProduk'       => '80000',
            'deskripsiProduk'   => 'Filler Untuk CrossFlow Cooling Tower merupakan part yang digunakan dalam mesin Cooling Tower yang berfungsi sebagai filter air. Dapat digunakan untuk berbagai merk Cooling Tower seperti Kuken, Liang Chi, dan lainnya. Menggunakan media jenis film PolyVinyl Chloride (PVC) bentuk vakum adalah pilihan hemat biaya yang sangat baik untuk Cooling Tower Anda.

Ketebalan standar untuk filler ini 12 mil (0,30mm sebelum dibentuk). Ketebalan lain juga tersedia berdasarkan permintaan. Filler ini mudah diikat ke dalam kemasan menggunakan perekat PVC. 

Spesifikasi :
Dimensi : 750 mm x (By Request)
Tebal      : 0.35 
Warna     : Hitam & Abu-Abu',
            'namaGambar'   => '9cpnCPE8mSproduk3.png',
            'category_id' => '3'
        ]);
        produk::create([
            'namaProduk'        => 'Filler Cooling Tower - Kuken',
            'slug'              => 'filler-cooling-tower-kuken',
            'hargaProduk'       => '90000',
            'deskripsiProduk'   => 'Filler Untuk CrossFlow Cooling Tower merupakan part yang digunakan dalam mesin Cooling Tower yang berfungsi sebagai filter air. Dapat digunakan untuk berbagai merk Cooling Tower seperti Kuken, Liang Chi, dan lainnya. Menggunakan media jenis film PolyVinyl Chloride (PVC) bentuk vakum adalah pilihan hemat biaya yang sangat baik untuk Cooling Tower Anda.

Spesifikasi :
2000 mm(H) x 750 mm(W)
2300 mm(H) x 750 mm(W))',
            'namaGambar'   => 'Gc6wxUeGa2produk4.png',
            'category_id' => '3'
        ]);
        produk::create([
            'namaProduk'        => 'Filler Cooling Tower - Marley',
            'slug'              => 'filler-cooling-tower-marley',
            'hargaProduk'       => '250000',
            'deskripsiProduk'   => 'Filler Untuk CrossFlow Cooling Tower merupakan part yang digunakan dalam mesin Cooling Tower yang berfungsi sebagai filter air. Dapat digunakan untuk berbagai merk Cooling Tower seperti Kuken, Liang Chi, dan lainnya. Menggunakan media jenis film PolyVinyl Chloride (PVC) bentuk vakum adalah pilihan hemat biaya yang sangat baik untuk Cooling Tower Anda.

Ketebalan standar untuk filler ini 12 mil (0,30mm sebelum dibentuk). Ketebalan lain juga tersedia berdasarkan permintaan. Filler ini mudah diikat ke dalam kemasan menggunakan perekat PVC. 

Spesifikasi :
Dimensi : 1220 x (By Request)
Tebal     :  0.35
Warna   : Hitam',
            'namaGambar'   => 'Z3WTgA0T39produk5.png',
            'category_id' => '3'
        ]);
        produk::create([
            'namaProduk'        => 'Filter Cooling Tower - King Sun',
            'slug'              => 'filter-cooling-tower-king-sun',
            'hargaProduk'       => '5000000',
            'deskripsiProduk'   => 'Filler Untuk CrossFlow Cooling Tower merupakan part yang digunakan dalam mesin Cooling Tower yang berfungsi sebagai filter air. Dapat digunakan untuk berbagai merk Cooling Tower seperti Kuken, Liang Chi, dan lainnya. Menggunakan media jenis film PolyVinyl Chloride (PVC) bentuk vakum adalah pilihan hemat biaya yang sangat baik untuk Cooling Tower Anda.

Ketebalan standar untuk filler ini 12 mil (0,30mm sebelum dibentuk). Ketebalan lain juga tersedia berdasarkan permintaan. Filler ini mudah diikat ke dalam kemasan menggunakan perekat PVC. 

Spesifikasi : 
Bahan - Warna : PVC - Hitam
Ukuran : 800 mm(H) x 750 mm(W)',
            'namaGambar'   => 'HBih1hFST6produk6.png',
            'category_id' => '3'
        ]);
    }
}
