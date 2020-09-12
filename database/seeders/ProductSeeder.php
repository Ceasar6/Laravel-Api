<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'iphone1';
        $product->price = '1000';
        $product->color = 'blue';
        $product->save();

        $product = new Product();
        $product->name = 'iphone2';
        $product->price = '1200';
        $product->color = 'red';
        $product->save();

        $product = new Product();
        $product->name = 'iphone3';
        $product->price = '1300';
        $product->color = 'black';
        $product->save();

        $product = new Product();
        $product->name = 'iphone4';
        $product->price = '1400';
        $product->color = 'white';
        $product->save();
    }
}
