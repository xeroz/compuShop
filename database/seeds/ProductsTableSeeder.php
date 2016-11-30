<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      DB::table('products')->insert([
         'name'                => 'Notebook HP 14-am000',
         'image'               => 'notebook-HP-14-am000.png',
         'company_id'          => 2,
         'type_product_id'     => 1,
         'category_product_id' => 1,
      ]);

      DB::table('products')->insert([
         'name'                => 'HP Pavilion 14-av005la',
         'image'               => 'HP-Pavilion-14-av005la.png',
         'company_id'          => 2,
         'type_product_id'     => 1,
         'category_product_id' => 1,
      ]);

      DB::table('products')->insert([
         'name'                => 'HP Pavilion 14-av002la',
         'image'               => 'HP-Pavilion-14-av002la.png',
         'company_id'          => 2,
         'type_product_id'     => 1,
         'category_product_id' => 1,
      ]);

      DB::table('products')->insert([
         'name'                => 'Lenovo Yoga 700',
         'image'               => 'Lenovo-Yoga-700.png',
         'company_id'          => 1,
         'type_product_id'     => 1,
         'category_product_id' => 2,
      ]);

      DB::table('products')->insert([
         'name'                => 'Lenovo Yoga 510',
         'image'               => 'Lenovo-Yoga-510.png',
         'company_id'          => 1,
         'type_product_id'     => 1,
         'category_product_id' => 2,
      ]);

      DB::table('products')->insert([
         'name'                => 'MAcBook',
         'image'               => 'macbook.png',
         'company_id'          => 3,
         'type_product_id'     => 1,
         'category_product_id' => 1,
      ]);

      DB::table('products')->insert([
         'name'                => 'MAcBook Pro',
         'image'               => 'macbook-pro.png',
         'company_id'          => 3,
         'type_product_id'     => 1,
         'category_product_id' => 1,
      ]);

      DB::table('products')->insert([
         'name'                => 'HP Spectre Pro',
         'image'               => 'hp-spectre-pro.png',
         'company_id'          => 2,
         'type_product_id'     => 1,
         'category_product_id' => 2,
      ]);

      DB::table('products')->insert([
         'name'                => 'Samsung Notebook 9',
         'image'               => 'samsung-notebook-9.png',
         'company_id'          => 6,
         'type_product_id'     => 1,
         'category_product_id' => 2,
      ]);

      DB::table('products')->insert([
         'name'                => 'Beats EP',
         'image'               => 'beats-ep.png',
         'company_id'          => 4,
         'type_product_id'     => 2,
         'category_product_id' => 3,
      ]);

      DB::table('products')->insert([
         'name'                => 'Beats Solo2',
         'image'               => 'beats-solo2.png',
         'company_id'          => 4,
         'type_product_id'     => 2,
         'category_product_id' => 3,
      ]);

      DB::table('products')->insert([
         'name'                => 'Beats Pro',
         'image'               => 'beats-pro.png',
         'company_id'          => 4,
         'type_product_id'     => 2,
         'category_product_id' => 3,
      ]);

      DB::table('products')->insert([
         'name'                => 'Beats Studio Wireless',
         'image'               => 'beats-studio-wireless.png',
         'company_id'          => 4,
         'type_product_id'     => 2,
         'category_product_id' => 3,
      ]);

      DB::table('products')->insert([
         'name'                => 'Beats Solo3',
         'image'               => 'beats-solo3.png',
         'company_id'          => 4,
         'type_product_id'     => 2,
         'category_product_id' => 3,
      ]);

      DB::table('products')->insert([
         'name'                => 'Skullcandy Ink’d Wireless',
         'image'               => 'skullcandy-Ink’d Wireless.png',
         'company_id'          => 7,
         'type_product_id'     => 2,
         'category_product_id' => 4,
      ]);

      DB::table('products')->insert([
         'name'                => 'Skullcandy Ink’d',
         'image'               => 'skullcandy-Ink’d.png',
         'company_id'          => 7,
         'type_product_id'     => 2,
         'category_product_id' => 4,
      ]);

      DB::table('products')->insert([
         'name'                => 'Skullcandy-S2IKDY',
         'image'               => 'skullcandy-S2IKDY-102.png',
         'company_id'          => 7,
         'type_product_id'     => 2,
         'category_product_id' => 4,
      ]);

      DB::table('products')->insert([
         'name'                => 'Skullcandy Buds2',
         'image'               => 'skullcandy-smokin-buds-2.png',
         'company_id'          => 7,
         'type_product_id'     => 2,
         'category_product_id' => 4,
      ]);
   }
}