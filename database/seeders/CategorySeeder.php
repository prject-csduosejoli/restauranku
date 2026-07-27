<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    
    public function run(): void
    {
        $categories = [
            [
                'cat_name' => 'Makanan',
                'description' => 'Kategori untuk semua jenis makanan yang tersedia di restoran.',
            ],
            [
                'cat_name' => 'Minuman',
                'description' => 'Kategori untuk semua jenis minuman yang tersedia di restoran.',
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
