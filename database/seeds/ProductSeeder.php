<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // Hier gaan we 200 producten genereren met random data

        for($i = 0; $i < 200; $i++){

            $product = new Product();
            $product->title = $faker->text(20);
            $product->description = $faker->text(200);
            $product->price = $faker->randomFloat(2,5,100);
            $product->pub_date = $faker->dateTimeBetween('-10 years', '+5 years');
            $product->save();


            // $product = new Product();
            // $product->title = 'Product ' . $i;
            // $product->description = 'Bla bla bla bla';
            // $product->price =  10.00;
            // $product->pub_date = new \DateTime();

            // $product->save();
        }
    }
}
