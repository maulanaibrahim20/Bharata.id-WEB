<?php

namespace Database\Seeders;

use App\Models\Kategori\Category;
use App\Models\Kategori\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subCategories = [
            [
                'categoryId' => 1,
                'slug' => 'lighting-stage',
                'name' => 'Lighting Stage',
                'thumbnailUrl' => null,
                'description' => null,
            ]
        ];

        foreach ($subCategories as $data) {
            SubCategory::create([
                'categoryId' => $data['categoryId'],
                'slug' => $data['slug'],
                'name' => $data['name'],
                'description' => $data['description'],
                'thumbnailUrl' => $data['thumbnailUrl'],
            ]);
        }
    }
}
