<?php

namespace Database\Seeders;

use App\Models\Kategori\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Lighting Stage',
                'nameSlug' => 'lighting-stage',
                'group' => 'Perlengkapan Acara',
                'groupSlug' => 'perlengkapan-acara',
                'description' => null,
                'imageThumbnailUrl' => 'category_thumbnail/thumbnail_1.jpg',
                'groupThumbnailUrl' => null,
            ]
        ];

        foreach ($categories as $data) {
            Category::create([
                'name' => $data['name'],
                'nameSlug' => $data['nameSlug'],
                'group' => $data['group'],
                'groupSlug' => $data['groupSlug'],
                'description' => $data['description'],
                'imageHomeThumbnailUrl' => $data['imageThumbnailUrl'],
                'groupThumbnailUrl' => $data['groupThumbnailUrl'],
            ]);
        }
    }
}
