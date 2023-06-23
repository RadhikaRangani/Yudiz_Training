<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\factory as faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0;$i<=2;$i++){

            $products =  new Product;
            $products->name = $faker->name;
            $products->description = $faker->text;
            $products->image = $faker->imageUrl;
            $products->save();
        }


    }
}
