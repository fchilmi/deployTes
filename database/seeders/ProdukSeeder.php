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
            'namaProduk'        => 'Produk 1',
            'slug'              => Str::slug(fake()->sentence(3)),
            'hargaProduk'       => fake()->numerify(),
            'deskripsiProduk'   => fake()->text(),
            'namaGambar'   => '1b.png',
            'category_id' => '1'
        ]);
        produk::create([
            'namaProduk'        => 'Produk 2',
            'slug'              => Str::slug(fake()->sentence(3)),
            'hargaProduk'       => fake()->numerify(),
            'deskripsiProduk'   => fake()->text(),
            'namaGambar'   => '2a.png',
            'category_id' => '1'
        ]);
        produk::create([
            'namaProduk'        => 'Produk 3',
            'slug'              => Str::slug(fake()->sentence(3)),
            'hargaProduk'       => fake()->numerify(),
            'deskripsiProduk'   => fake()->text(),
            'namaGambar'   => '3b.png',
            'category_id' => '1'
        ]);
        produk::create([
            'namaProduk'        => 'Produk 4',
            'slug'              => Str::slug(fake()->sentence(3)),
            'hargaProduk'       => fake()->numerify(),
            'deskripsiProduk'   => fake()->text(),
            'namaGambar'   => '4a.png',
            'category_id' => '1'
        ]);
        produk::create([
            'namaProduk'        => 'Produk 5',
            'slug'              => Str::slug(fake()->sentence(3)),
            'hargaProduk'       => fake()->numerify(),
            'deskripsiProduk'   => fake()->text(),
            'namaGambar'   => '5b.png',
            'category_id' => '1'
        ]);
        produk::create([
            'namaProduk'        => 'Produk 6',
            'slug'              => Str::slug(fake()->sentence(3)),
            'hargaProduk'       => fake()->numerify(),
            'deskripsiProduk'   => fake()->text(),
            'namaGambar'   => '6b.png',
            'category_id' => '1'
        ]);
    }
}
