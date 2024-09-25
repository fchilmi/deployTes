<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // produk::factory(10)->create();
        produk::factory(10)->recycle([
            Category::all()
        ])->create();
    }
}
