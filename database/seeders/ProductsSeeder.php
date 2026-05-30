<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'ノートPC',
                'price' => 120000,
                'stock' => 10,
                'category' => '電子機器',
            ],
            [
                'name' => 'マウス',
                'price' => 2000,
                'stock' => 50,
                'category' => '電子機器',
            ],
            [
                'name' => 'キーボード',
                'price' => 5000,
                'stock' => 30,
                'category' => '電子機器',
            ],
            [
                'name' => 'デスク',
                'price' => 25000,
                'stock' => 5,
                'category' => '家具',
            ],
            [
                'name' => 'チェア',
                'price' => 15000,
                'stock' => 8,
                'category' => '家具',
            ],
        ]);
    }
}
