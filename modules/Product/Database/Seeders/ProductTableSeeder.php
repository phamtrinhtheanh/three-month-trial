<?php
namespace Modules\Product\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Modules\Product\Models\Category;

class ProductTableSeeder extends Seeder
{
    public function run(): void
    {
        // Insert a flash sale
        DB::table('flashsales')->insert([
            'name' => 'Flash Sale 1',
            'start' => Carbon::now()->subDays(1),
            'end' => Carbon::now()->addDays(1),
        ]);

        $categories = Category::all();
        for ($i = 0; $i < 200; $i++) {
            $category = $categories->random();
            $name = $category->name . ' ' . random_int(100000, 900000);
            $importPrice = fake()->numberBetween(500, 90000);
            $price = fake()->numberBetween($importPrice + 1000, 100000);
            $salePrice = fake()->numberBetween(1000, $price - 500);

            // Insert a product
            $productId = DB::table('products')->insertGetId([
                'name' => $name,
                'price' => $price,
                'sale_price' => $salePrice,
                'short_desc' => 'The best',
                'description' => 'The best',
                'sold' => fake()->numberBetween(0, 1000),
                'slug' => Str::slug($name) . '-' . md5(Carbon::now()),
                'thumbnail' => $category->thumbnail,
                'category_id' => $category->id,
                'shop_id' => fake()->numberBetween(1, 2),
                'user_created' => fake()->numberBetween(1, 10),
                'user_updated' => fake()->numberBetween(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert the product into the flash sale only once
            if ($i < 10) {
                $flashsaleId = 1;
                $flashPrice = rand(50, 100);

                DB::table('flashsale_product')->insert([
                    'product_id' => $productId,
                    'flashsale_id' => $flashsaleId,
                    'flash_price' => $flashPrice,
                ]);
            }

            for ($j = 1; $j <= rand(2, 4); $j++) {
                // Insert a product variant
                $variantId = DB::table('product_variants')->insertGetId([
                    'name' => 'Variant ' . $j . ' of Product ' . $i,
                    'price' => rand(100, 500),
                    'stock' => rand(1000, 5000),
                    'import_price' => rand(100, 500),
                    'sale_price' => rand(100, 500),
                    'product_id' => $productId,
                ]);

                if ($i < 10) {
                    // Insert the variant into the flash sale
                    DB::table('flashsale_variant')->insert([
                        'variant_id' => $variantId,
                        'flashsale_id' => $flashsaleId,
                        'flash_price' => $flashPrice,
                        'stock' => rand(10, 50),
                        'sold' => 0,
                    ]);
                }
            }
        }
    }
}
