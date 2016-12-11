<?php
namespace App\Persistences\WishListProduct;

use DB;
use Auth;

class WishListProductPersistenceEloquent implements WishListProductPersistenceInterface {

   public function getWishList($user_id)
   {
      $wish_lists = DB::table('wish_list_products')->where('wish_list_id', '=', $user_id)
                                                   ->select('product_id')
                                                   ->get();

      return $wish_lists;
   }
}