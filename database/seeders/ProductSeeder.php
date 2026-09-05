<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'nama_produk' => 'Laptop ASUS Vivobook 15',
                'deskripsi' => 'Laptop ringan dan nyaman untuk kerja harian, belajar, dan multitasking.',
                'harga' => 7600000,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
