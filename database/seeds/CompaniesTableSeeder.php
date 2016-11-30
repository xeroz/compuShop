<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      DB::table('companies')->insert([
         'name'  => 'Lenovo',
         'image' => 'lenovo.png',
      ]);

      DB::table('companies')->insert([
         'name'  => 'HP',
         'image' => 'hp.png',
      ]);

      DB::table('companies')->insert([
         'name'  => 'Apple',
         'image' => 'apple.png',
      ]);

      DB::table('companies')->insert([
         'name'  => 'Beats',
         'image' => 'beats.png',
      ]);

      DB::table('companies')->insert([
         'name'  => 'LG',
         'image' => 'lg.png',
      ]);

      DB::table('companies')->insert([
         'name'  => 'Samsung',
         'image' => 'samsung.png',
      ]);

      DB::table('companies')->insert([
         'name'  => 'Skullcandy',
         'image' => 'skullcandy.png',
      ]);
   }
}
