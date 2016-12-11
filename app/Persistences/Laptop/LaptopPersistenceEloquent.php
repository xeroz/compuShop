<?php
namespace App\Persistences\Laptop;

use App\Models\Laptop;

class LaptopPersistenceEloquent implements LaptopPersistenceInterface {

   public function all()
   {
      $laptops   = Laptop::all();

      return $laptops;
   }

   public function find($id)
   {
      $laptop = Laptop::find($id);

      return $laptop;
   }

   public function relatedProducts()
   {
      $related_products = Laptop::all()->random(4);

      return $related_products;
   }
}