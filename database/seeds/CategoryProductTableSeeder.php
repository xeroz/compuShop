<?php

use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      DB::table('categories_products')->insert([
         'name'  => 'Estandar',
      ]);

      DB::table('categories_products')->insert([
         'name'  => 'Ultrabooks',
      ]);

      DB::table('categories_products')->insert([
         'name'  => 'Headphone',
      ]);

      DB::table('categories_products')->insert([
         'name'  => 'Earphone',
      ]);

      DB::table('categories_products')->insert([
         'name'  => 'LCD',
      ]);

      DB::table('categories_products')->insert([
         'name'  => 'LED',
      ]);
   }
}
