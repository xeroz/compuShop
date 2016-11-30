<?php

use Illuminate\Database\Seeder;

class WishListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('wish_list')->insert([
         'id' => 1,
      ]);
    }
}
