<?php

use Illuminate\Database\Seeder;

class LaptopsTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      DB::table('laptops')->insert([
         'id'               => 1,
         'operating_system' => 'Windows 10 Home 64',
         'processor'        => 'Intel® Celeron® N3060',
         'display'          => 'WLED HD SVA BrightView de 14" en diagonal (1366 x 768)',
         'memory'           => '4 GB de SDRAM DDR3L-1600',
         'battery_life'     => 'iones de litio de 3 celdas, 31 W/h',
      ]);

      DB::table('laptops')->insert([
         'id'               => 2,
         'operating_system' => 'Windows 10 Home 64',
         'processor'        => 'APU AMD Quad-Core A10-8700P',
         'display'          => 'WLED HD SVA BrightView de 14" en diagonal (1366 x 768)',
         'memory'           => '16 GB de SDRAM DDR3L-1600',
         'battery_life'     => 'Iones de litio de 3 celdas y 41 Wh',
      ]);

      DB::table('laptops')->insert([
         'id'               => 3,
         'operating_system' => 'Windows 10 Home 64',
         'processor'        => 'APU AMD Quad-Core A8-7410 con gráficos Radeon™ R5',
         'display'          => 'WLED HD SVA BrightView de 14" en diagonal (1366 x 768)',
         'memory'           => 'SDRAM DDR3L-1600 de 8 GB',
         'battery_life'     => 'Iones de litio de 3 celdas y 41 Wh',
      ]);

      DB::table('laptops')->insert([
         'id'               => 4,
         'operating_system' => 'Windows 10 Home',
         'processor'        => 'Procesador Intel® Core™ i7 6° generación',
         'display'          => '14" FHD (1920 x 1080) IPS',
         'memory'           => '8 GB DDR3',
         'battery_life'     => '4 celdas, 45 watts/hora, polímeros de litio',
      ]);

      DB::table('laptops')->insert([
         'id'               => 5,
         'operating_system' => 'Windows 10 Home',
         'processor'        => 'Procesador Intel® Core™ de 6° generación',
         'display'          => '14" FHD (1920 x 1080) IPS',
         'memory'           => '8 GB DDR3',
         'battery_life'     => '4 celdas, 45 watts/hora, polímeros de litio',
      ]);

      DB::table('laptops')->insert([
         'id'               => 6,
         'operating_system' => 'macOS Sierra',
         'processor'        => 'Procesador Intel Core m5 dual core de 1.2 GHz (Turbo Boost de hasta 2.7 GHz) con 4 MB de caché L3',
         'display'          => 'Pantalla Retina de 12 pulgadas (diagonal) retroiluminada por LED con tecnología IPS',
         'memory'           => '8 GB de memoria LPDDR3 integrada de 1866 MHz',
         'battery_life'     => 'Hasta 10 horas de navegación inalámbrica',
      ]);

      DB::table('laptops')->insert([
         'id'               => 7,
         'operating_system' => 'macOS Sierra',
         'processor'        => 'Procesador Intel Core m5 dual core de 1.2 GHz (Turbo Boost de hasta 2.7 GHz) con 4 MB de caché L3',
         'display'          => 'Pantalla Retina de 12 pulgadas (diagonal) retroiluminada por LED con tecnología IPS',
         'memory'           => '8 GB de memoria LPDDR3 integrada de 1866 MHz',
         'battery_life'     => 'Hasta 10 horas de navegación inalámbrica',
      ]);

      DB::table('laptops')->insert([
         'id'               => 8,
         'operating_system' => 'Windows 10 Home',
         'processor'        => 'Procesador Intel® Core™ de 6° generación',
         'display'          => '14" FHD (1920 x 1080) IPS',
         'memory'           => '8 GB DDR3',
         'battery_life'     => '4 celdas, 45 watts/hora, polímeros de litio',
      ]);

      DB::table('laptops')->insert([
         'id'               => 9,
         'operating_system' => 'Windows 10 Home',
         'processor'        => 'Procesador Intel® Core™ de 6° generación',
         'display'          => '14" FHD (1920 x 1080) IPS',
         'memory'           => '8 GB DDR3',
         'battery_life'     => '4 celdas, 45 watts/hora, polímeros de litio',
      ]);
   }
}
