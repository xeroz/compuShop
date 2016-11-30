<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      $this->call(CompaniesTableSeeder::class);
      $this->call(CategoryProductTableSeeder::class);
      $this->call(TypeProductTableSeeder::class);
      $this->call(ProductsTableSeeder::class);
      $this->call(LaptopsTableSeeder::class);
      $this->call(AudioTableSeeder::class);
      $this->call(ProductDetailTableSeeder::class);
      $this->call(UserTableSeeder::class);
      $this->call(WishListTableSeeder::class);
   }
}
