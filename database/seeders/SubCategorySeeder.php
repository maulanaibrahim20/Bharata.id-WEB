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
                'nameEng' => 'Stage Lighting',
                'nameInd' => 'Lighting Stage',
                'thumbnailUrl' => null,
                'nameEngDesc' => null,
                'nameIndDesc' => null,
                'nameIndContent' => null,
            ]
        ];

        foreach ($subCategories as $data) {
            SubCategory::create([
                'categoryId' => $data['categoryId'],
                'slug' => $data['slug'],
                'nameEng' => $data['nameEng'],
                'nameInd' => $data['nameInd'],
                'thumbnailUrl' => $data['thumbnailUrl'],
                'nameEngDesc' => $data['nameEngDesc'],
                'nameIndDesc' => $data['nameIndDesc'],
                'nameIndContent' => $data['nameIndContent']
            ]);
        }
    }
}
