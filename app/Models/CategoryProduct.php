<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
   protected $table   = 'categories_products';
   public $timestamps = false;

   public function products()
   {
      return $this->hasMany(Product::class, 'category_product_id');
   }
}
