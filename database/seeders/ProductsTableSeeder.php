<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Product;
use App\Models\Trademark;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->count(120)->create();

        $faker = Factory::create();
        Product::all()->each(function ($product) use ($faker){
           $product->slug = Str::slug($product->title, '-');
           $product->save();

           $categories = [];
           $country = [];
           $trademark = [];

           for ($i = 0; $i < 4; $i++){
               array_push($categories, $faker->numberBetween(1, 5));
               array_push($country, $faker->numberBetween(1, 100));
               array_push($trademark, $faker->numberBetween(1, 35));
           }

            for ($i = 0; $i < 9; $i++){
                $td = Trademark::find($faker->numberBetween(1, 10));
                $product->trademark()->associate($td->trademark_name);
            }
            //dd($td->trademark_name);
            for ($i = 0; $i < 99; $i++){
                $ct = Country::find($faker->numberBetween(1, 100));
                $product->country()->associate($ct->country_name);
            }

            $product->categories()->sync($categories);
            $product->save();
        });
    }
}
