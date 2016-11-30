<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
   protected $table   = 'laptops';
   public $timestamps = false;

   public function product()
   {
      return $this->belongsTo(Product::class, 'id');
   }
}
