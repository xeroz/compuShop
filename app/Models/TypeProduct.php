<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
   protected $table   = 'types_products';
   public $timestamps = false;

   public function products()
   {
      return $this->hasMany(Product::class, 'type_product_id');
   }

}
