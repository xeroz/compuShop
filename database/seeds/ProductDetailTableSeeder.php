<?php

use Illuminate\Database\Seeder;

class ProductDetailTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      DB::table('product_details')->insert([
         'id'    => 1,
         'stock' => 15,
         'price' => 1500,
      ]);

      DB::table('product_details')->insert([
         'id'    => 2,
         'stock' => 15,
         'price' => 1600,
      ]);

      DB::table('product_details')->insert([
         'id'    => 3,
         'stock' => 15,
         'price' => 1600,
      ]);

      DB::table('product_details')->insert([
         'id'    => 4,
         'stock' => 15,
         'price' => 1500,
      ]);

      DB::table('product_details')->insert([
         'id'    => 5,
         'stock' => 15,
         'price' => 1600,
      ]);

      DB::table('product_details')->insert([
         'id'    => 6,
         'stock' => 15,
         'price' => 1800,
      ]);

      DB::table('product_details')->insert([
         'id'    => 7,
         'stock' => 15,
         'price' => 1800,
      ]);

      DB::table('product_details')->insert([
         'id'    => 8,
         'stock' => 15,
         'price' => 2000,
      ]);

      DB::table('product_details')->insert([
         'id'    => 9,
         'stock' => 15,
         'price' => 1900,
      ]);

      DB::table('product_details')->insert([
         'id'    => 10,
         'stock' => 15,
         'price' => 900,
      ]);

      DB::table('product_details')->insert([
         'id'    => 11,
         'stock' => 15,
         'price' => 700,
      ]);

      DB::table('product_details')->insert([
         'id'    => 12,
         'stock' => 15,
         'price' => 700,
      ]);

      DB::table('product_details')->insert([
         'id'    => 13,
         'stock' => 15,
         'price' => 800,
      ]);

      DB::table('product_details')->insert([
         'id'    => 14,
         'stock' => 15,
         'price' => 900,
      ]);

      DB::table('product_details')->insert([
         'id'    => 15,
         'stock' => 15,
         'price' => 700,
      ]);

      DB::table('product_details')->insert([
         'id'    => 16,
         'stock' => 15,
         'price' => 700,
      ]);

      DB::table('product_details')->insert([
         'id'    => 17,
         'stock' => 15,
         'price' => 800,
      ]);

      DB::table('product_details')->insert([
         'id'    => 18,
         'stock' => 15,
         'price' => 900,
      ]);
   }
}
