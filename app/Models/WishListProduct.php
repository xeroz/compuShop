<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishListProduct extends Model
{
   protected $table   = 'wish_list_products';
   public $timestamps = false;

   public function wishList()
   {
      return $this->belongsTo(wishList::class, 'id');
   }

   public function product()
   {
      return $this->belongsTo(Product::class, 'id');
   }
}
