<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
   protected $table   = 'headphones';
   public $timestamps = false;

   public function product()
   {
      return $this->belongsTo(Product::class, 'id');
   }
}
