<?php

namespace Database\Seeders;

use App\Models\Kategori\GroupCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GroupCategory::create([
            'name' => 'Event Supplies',
        ]);
    }
}
