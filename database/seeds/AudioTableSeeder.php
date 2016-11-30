<?php

use Illuminate\Database\Seeder;

class AudioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      DB::table('headphones')->insert([
         'id'          => 10,
         'connection'  => 'Para puertos mini jack',
         'batteries'   => 'Sin batería para reproducción ilimitada',
         'height'      => '7.8 in / 19.8 cm',
         'weight'      => '7.58 oz / 215 g',
         'form_factor' => 'On Ear',
      ]);

      DB::table('headphones')->insert([
         'id'          => 11,
         'connection'  => 'Para puertos mini jack',
         'batteries'   => 'Sin batería para reproducción ilimitada',
         'height'      => '7.8 in / 19.8 cm',
         'weight'      => '7.58 oz / 215 g',
         'form_factor' => 'On Ear',
      ]);

      DB::table('headphones')->insert([
         'id'          => 12,
         'connection'  => 'Para puertos mini jack',
         'batteries'   => 'Sin batería para reproducción ilimitada',
         'height'      => '7.8 in / 19.8 cm',
         'weight'      => '7.58 oz / 215 g',
         'form_factor' => 'On Ear',
      ]);

      DB::table('headphones')->insert([
         'id'          => 13,
         'connection'  => 'wireless',
         'batteries'   => '12 horas de duración',
         'height'      => '7.8 in / 19.8 cm',
         'weight'      => '7.58 oz / 215 g',
         'form_factor' => 'On Ear',
      ]);

      DB::table('headphones')->insert([
         'id'          => 14,
         'connection'  => 'wireless',
         'batteries'   => '12 horas de duración',
         'height'      => '7.8 in / 19.8 cm',
         'weight'      => '7.58 oz / 215 g',
         'form_factor' => 'On Ear',
      ]);

      DB::table('headphones')->insert([
         'id'          => 15,
         'connection'  => 'Para puertos mini jack',
         'batteries'   => 'Sin batería para reproducción ilimitada',
         'height'      => '7.8 in / 19.8 cm',
         'weight'      => '7.58 oz / 215 g',
         'form_factor' => 'On Ear',
      ]);

      DB::table('headphones')->insert([
         'id'          => 16,
         'connection'  => 'Para puertos mini jack',
         'batteries'   => 'Sin batería para reproducción ilimitada',
         'height'      => '7.8 in / 19.8 cm',
         'weight'      => '7.58 oz / 215 g',
         'form_factor' => 'On Ear',
      ]);

      DB::table('headphones')->insert([
         'id'          => 17,
         'connection'  => 'wireless',
         'batteries'   => '12 horas de duración',
         'height'      => '7.8 in / 19.8 cm',
         'weight'      => '7.58 oz / 215 g',
         'form_factor' => 'On Ear',
      ]);

      DB::table('headphones')->insert([
         'id'          => 18,
         'connection'  => 'wireless',
         'batteries'   => '12 horas de duración',
         'height'      => '7.8 in / 19.8 cm',
         'weight'      => '7.58 oz / 215 g',
         'form_factor' => 'On Ear',
      ]);
   }
}
