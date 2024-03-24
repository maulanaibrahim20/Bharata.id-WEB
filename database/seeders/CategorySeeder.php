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
                'nameEng' => 'Stage Lighting',
                'nameInd' => 'Lighting Stage',
                'groupEng' => 'Event Supplies',
                'groupInd' => 'Perlengkapan Acara',
                'groupSlug' => 'perlengkapan-acara',
                'nameSlug' => 'lighting-stage',
                'descriptionEng' => null,
                'descriptionInd' => null,
                'homeThumbnailUrl' => 'category_thumbnail/thumbnail_1.jpg',
                'nameThumbnailUrl' => 'https://s3-ap-southeast-1.amazonaws.com/raggam-assets/category_thumbnails/raggam-category-name-thumbnail-Stage-Lighting-0.da11or93.png',
                'groupThumbnailUrl' => null,
            ]
        ];

        foreach ($categories as $data) {
            Category::create([
                'nameEng' => $data['nameEng'],
                'nameInd' => $data['nameInd'],
                'groupEng' => $data['groupEng'],
                'groupInd' => $data['groupInd'],
                'groupSlug' => $data['groupSlug'],
                'nameSlug' => $data['nameSlug'],
                'descriptionEng' => $data['descriptionEng'],
                'descriptionInd' => $data['descriptionInd'],
                'homeThumbnailUrl' => $data['homeThumbnailUrl'],
                'nameThumbnailUrl' => $data['nameThumbnailUrl'],
                'groupThumbnailUrl' => $data['groupThumbnailUrl'],
            ]);
        }
    }
}
