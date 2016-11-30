<?php

use Illuminate\Database\Seeder;

class TypeProductTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      DB::table('types_products')->insert([
         'name'  => 'Laptops',
      ]);

      DB::table('types_products')->insert([
         'name'  => 'Audio',
      ]);

      DB::table('types_products')->insert([
         'name'  => 'Monitores',
      ]);
   }
}
