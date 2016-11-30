<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table   = 'products';
   public $timestamps = false;

   public function type_product()
   {
      return $this->belongsTo(TypeProduct::class, 'id');
   }

   public function category_product()
   {
      return $this->belongsTo(CategoryProduct::class, 'id');
   }

   public function company()
   {
      return $this->belongsTo(Company::class, 'id');
   }

   public function laptop()
   {
      return $this->hasOne(Laptop::class, 'id');
   }

   public function audio()
   {
      return $this->hasOne(Laptop::class, 'id');
   }

   public function detail()
   {
      return $this->hasOne(ProductDetail::class, 'id');
   }

   public function wishListProducts()
   {
      return $this->hasMany(WishListProduct::class, 'product_id');
   }

}
