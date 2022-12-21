<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // WOMENS
        for ($i=1; $i <= 12; $i++) {
            $category = Category::find(1);
            Product::create([
                'name' => 'Womens '.$i,
                'slug' => 'women-'.$i,
                'details' => 'women\'s hoodie',
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/December2021/womens-'.$i.'.png',
                'product_code' => $category->category_code.'-00'.$i,
                'price' => rand(999, 9999),
                'quantity' => rand(1,10),
            ])->categories()->attach($category);
        }

        $product = Product::find(1);
        $product->categories()->attach(4);

        // MENS
        for ($i=1; $i <= 12; $i++) {
            $category = Category::find(2);
            Product::create([
                'name' => 'Mens '.$i,
                'slug' => 'mens-'.$i,
                'details' => 'men\'s hoodie',
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/December2021/mens-'.$i.'.png',
                'product_code' => $category->category_code.'-00'.$i,
                'price' => rand(999, 9999),
                'quantity' => rand(1,10),
            ])->categories()->attach($category);
        }

        // Kids
        for ($i=1; $i <= 12; $i++) {
            $category = Category::find(3);
            Product::create([
                'name' => 'Kids '.$i,
                'slug' => 'kids-'.$i,
                'details' => 'kid\'s hoodie',
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/December2021/kids-'.$i.'.png',
                'product_code' => $category->category_code.'-00'.$i,
                'price' => rand(999, 9999),
                'quantity' => rand(1,10),
            ])->categories()->attach($category);
        }

        // LADIES
        for ($i=1; $i <= 12; $i++) {
            $category = Category::find(4);
            Product::create([
                'name' => 'Ladies '.$i,
                'slug' => 'homegoods-'.$i,
                'details' => 'homegoods',
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/December2021/homegoods-'.$i.'.png',
                'product_code' => $category->category_code.'-00'.$i,
                'price' => rand(999, 9999),
                'quantity' => rand(1,10),
            ])->categories()->attach($category);
        }
    }
}
