<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
{
    \App\Models\Product::create([
        'name' => 'Poster',
        'description' => 'Poster ukuran A3',
        'quantity' => 100,
        'price' => 50.00
    ]);

    \App\Models\Product::create([
        'name' => 'Brosur',
        'description' => 'Brosur full color',
        'quantity' => 200,
        'price' => 30.00
    ]);
}

}
