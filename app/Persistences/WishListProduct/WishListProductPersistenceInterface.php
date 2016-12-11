<?php
namespace App\Persistences\WishListProduct;

interface WishListProductPersistenceInterface {
   public function getWishList($user_id);
}