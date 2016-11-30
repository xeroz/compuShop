<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      DB::table('users')->insert([
         'name'      => 'Juan',
         'lastname'  => 'Chavez',
         'cellphone' => '5264897',
         'email'     => 'prueba@prueba.com',
         'password'  => bcrypt('prueba'),
      ]);
   }
}
