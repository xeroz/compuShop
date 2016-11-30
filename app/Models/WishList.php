<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
   protected $table   = 'wish_list';
   public $timestamps = false;

   public function user()
   {
      return $this->belongsTo(User::class, 'id');
   }

   public function wishListProducts()
   {
      return $this->hasMany(WishListProduct::class, 'wish_list_id');
   }
}
