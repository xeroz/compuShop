<?php
namespace App\Persistences\Laptop;

interface LaptopPersistenceInterface {
   public function all();
   public function find($id);
   public function relatedProducts();
}