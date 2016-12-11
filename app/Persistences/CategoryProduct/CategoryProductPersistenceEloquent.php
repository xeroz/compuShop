<?php
namespace App\Persistences\CategoryProduct;

use App\Models\CategoryProduct;

class CategoryProductPersistenceEloquent implements CategoryProductPersistenceInterface {

   public function getLaptopsOffice($category_product_id)
   {
      $laptops_office = CategoryProduct::find(1)->products;

      return $laptops_office;
   }
}