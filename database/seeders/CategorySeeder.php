<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'blue'
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'AI Computer',
            'slug' => 'ai-computer',
            'color' => 'black'
        ]);
        Category::create([
            'name' => 'Data Structure',
            'slug' => 'data-structure',
            'color' => 'yellow'
        ]);
    }
}