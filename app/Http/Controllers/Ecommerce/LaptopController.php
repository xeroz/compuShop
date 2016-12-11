<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Persistences\Laptop\LaptopPersistenceInterface;
use App\Persistences\Product\ProductPersistenceInterface;
use App\Persistences\WishListProduct\WishListProductPersistenceInterface;
use App\Persistences\CategoryProduct\CategoryProductPersistenceInterface;
use App\Persistences\User\UserPersistenceInterface;

class LaptopController extends Controller
{
   public function __construct(LaptopPersistenceInterface $laptop_persistence,
                               ProductPersistenceInterface $product_persistence,
                               WishListProductPersistenceInterface $wish_list_product_persistence,
                               CategoryProductPersistenceInterface $category_product_persistence,
                               UserPersistenceInterface $user_persistence)
   {
      $this->laptop_persistence            = $laptop_persistence;
      $this->product_persistence           = $product_persistence;
      $this->wish_list_product_persistence = $wish_list_product_persistence;
      $this->category_product_persistence  = $category_product_persistence;
      $this->user_persistence              = $user_persistence;
   }

   public function getAll()
   {

      $type_product_id = 1;

      $user_id    = $this->user_persistence->checkAuthenticacion();
      $laptops    = $this->laptop_persistence->all();
      $companies  = $this->product_persistence->getCompaniesByTypeProduct($type_product_id);
      $wish_lists = $this->wish_list_product_persistence->getWishList($user_id);

      $data = [
         'laptops'    => $laptops,
         'companies'  => $companies,
         'wish_lists' => $wish_lists,
      ];

      return view('laptop.all', $data);
   }

   public function getOffice()
   {
      $category_product_id = 1;

      $user_id        = $this->user_persistence->checkAuthenticacion();
      $laptops_office = $this->category_product_persistence->getLaptopsOffice($category_product_id);
      $companies      = $this->product_persistence->getCompaniesByCategoryProduct($category_product_id);
      $wish_lists     = $this->wish_list_product_persistence->getWishList($user_id);

      $data = [
         'laptops_office' => $laptops_office,
         'companies'      => $companies,
         'wish_lists'     => $wish_lists,
      ];

      return view('laptop.office', $data);
   }

   public function getUltrabooks()
   {
      $category_product_id = 2;

      $user_id        = $this->user_persistence->checkAuthenticacion();
      $laptops_office = $this->category_product_persistence->getLaptopsOffice($category_product_id);
      $companies      = $this->product_persistence->getCompaniesByCategoryProduct($category_product_id);
      $wish_lists     = $this->wish_list_product_persistence->getWishList($user_id);

      $data = [
         'laptops_office' => $laptops_office,
         'companies'      => $companies,
         'wish_lists'     => $wish_lists,
      ];

      return view('laptop.ultrabooks', $data);
   }

   public function getProduct($id)
   {
      $laptop           = $this->laptop_persistence->find($id);
      $related_products = $this->laptop_persistence->relatedProducts();

      $data = [
         'laptop'           => $laptop,
         'related_products' => $related_products,
      ];

      return view('laptop.product', $data);
   }

   public function filterByCompany(Request $request){

      $json_companies = $request->input('companies_id');

      $companies = json_decode($json_companies);

      if(Auth::check()){
         $auth = 1;
         $wish_list_id = Auth::user()->id;
      }else{
         $auth = 0;
         $wish_list_id = null;
      }


      $wish_lists = $this->wish_list_product_persistence->getWishList($wish_list_id);
      $laptops    = $this->product_persistence->filterProductByCompany($companies);

      $data = [
         'auth'       => $auth,
         'laptops'    => $laptops,
         'wish_lists' => $wish_lists,
      ];

      return response()->json($data);
   }

   public function filterOfficeByCompany(Request $request)
   {
      $json_companies = $request->input('companies_id');

      $companies = json_decode($json_companies);

      if(Auth::check()){
         $auth = 1;
         $wish_list_id = Auth::user()->id;
      }else{
         $auth = 0;
         $wish_list_id = null;
      }

      $wish_lists = $this->wish_list_product_persistence->getWishList($wish_list_id);
      $laptops    = $this->product_persistence->filterProductByCompany($companies);

      $data = [
         'auth'       => $auth,
         'laptops'    => $laptops,
         'wish_lists' => $wish_lists,
      ];

      return response()->json($data);
   }

   public function filterUltrabooksByCompany(Request $request)
   {
      $json_companies = $request->input('companies_id');

      $companies = json_decode($json_companies);

      if(Auth::check()){
         $auth = 1;
         $wish_list_id = Auth::user()->id;
      }else{
         $auth = 0;
         $wish_list_id = null;
      }

      $wish_lists = $this->wish_list_product_persistence->getWishList($wish_list_id);
      $laptops    = $this->product_persistence->filterProductByCompany($companies);

      $data = [
         'auth'       => $auth,
         'laptops'    => $laptops,
         'wish_lists' => $wish_lists,
      ];

      return response()->json($data);
   }

}
