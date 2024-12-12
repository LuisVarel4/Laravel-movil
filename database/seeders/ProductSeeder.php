<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Pelota de Fútbol', 'category' => 'Balones', 'price' => 50000, 'stock' => 20]);
        Product::create(['name' => 'Raqueta de Tenis', 'category' => 'Raquetas', 'price' => 120000, 'stock' => 10]);
        Product::create(['name' => 'Guantes de Boxeo', 'category' => 'Accesorios', 'price' => 80000, 'stock' => 15]);
    }
}
