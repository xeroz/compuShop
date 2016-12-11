<?php
namespace App\Persistences\Product;

interface ProductPersistenceInterface {
   public function getCompaniesByTypeProduct($type_product_id);
   public function getCompaniesByCategoryProduct($type_product_id);
   public function filterProductByCompany($companies);
}