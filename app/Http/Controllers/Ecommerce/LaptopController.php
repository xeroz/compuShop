<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

use Auth;

use App\Models\TypeProduct;
use App\Models\CategoryProduct;
use App\Models\Laptop;
use App\Models\ProductDetail;
use App\Models\Product;

class LaptopController extends Controller
{
   public function getAll()
   {

      if(Auth::check()){
         $wish_list_id = Auth::user()->id;
      }else{
         $wish_list_id = null;
      }

      $laptops   = Laptop::all();
      $companies = DB::table('products')->where('type_product_id', '=', '1')
                                        ->join('companies', 'companies.id', '=', 'products.company_id')
                                        ->select('companies.name', 'companies.id')
                                        ->distinct()
                                        ->get();

      $wish_lists = DB::table('wish_list_products')->where('wish_list_id', '=', $wish_list_id)
                                                  ->select('product_id')
                                                  ->get();

      $data = [
         'laptops'    => $laptops,
         'companies'  => $companies,
         'wish_lists' => $wish_lists,
      ];

      return view('laptop.all', $data);
   }

   public function getOffice()
   {
      if(Auth::check()){
         $wish_list_id = Auth::user()->id;
      }else{
         $wish_list_id = null;
      }

      $laptops_office = CategoryProduct::find(1)->products;
      $companies      = DB::table('products')->where('category_product_id', '=', '1')
                                             ->join('companies', 'companies.id', '=', 'products.company_id')
                                             ->select('companies.name', 'companies.id')
                                             ->distinct()
                                             ->get();

      $wish_lists = DB::table('wish_list_products')->where('wish_list_id', '=', $wish_list_id)
                                                   ->select('product_id')
                                                   ->get();

      $data = [
         'laptops_office' => $laptops_office,
         'companies'      => $companies,
         'wish_lists'     => $wish_lists,
      ];

      return view('laptop.office', $data);
   }

   public function getUltrabooks()
   {
      if(Auth::check()){
         $wish_list_id = Auth::user()->id;
      }else{
         $wish_list_id = null;
      }

      $laptops_office = CategoryProduct::find(2)->products;
      $companies = DB::table('products')->where('category_product_id', '=', '2')
                                        ->join('companies', 'companies.id', '=', 'products.company_id')
                                        ->select('companies.name', 'companies.id')
                                        ->distinct()
                                        ->get();

      $wish_lists = DB::table('wish_list_products')->where('wish_list_id', '=', $wish_list_id)
                                                   ->select('product_id')
                                                   ->get();

      $data = [
         'laptops_office' => $laptops_office,
         'companies'      => $companies,
         'wish_lists'     => $wish_lists,
      ];

      return view('laptop.ultrabooks', $data);
   }

   public function getProduct($id)
   {
      if(Auth::check()){
         $wish_list_id = Auth::user()->id;
      }else{
         $wish_list_id = null;
      }

      $laptop = Laptop::find($id);
      $related_products = Laptop::all()->random(4);

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

      $wish_lists = DB::table('wish_list_products')->where('wish_list_id', '=', $wish_list_id)
                                                   ->select('product_id')
                                                   ->get();

      if(empty($companies)){

         $laptops = DB::table('products')->where('type_product_id','=',1)
                                         ->join('product_details','product_details.id','=','products.id')->get();

      }else{

         $query_list = DB::table('products')->where('company_id','=', 0)
                                            ->join('product_details','product_details.id','=','products.id');

         foreach ($companies as $company) {

            $subquery = DB::table('products')->where('company_id','=', $company->id)
                                             ->join('product_details','product_details.id','=','products.id');

            $query_list = $query_list->union($subquery);

         }

         $laptops = $query_list->get();
      }

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

      $wish_lists = DB::table('wish_list_products')->where('wish_list_id', '=', $wish_list_id)
                                                   ->select('product_id')
                                                   ->get();

      if(empty($companies)){

         $laptops = DB::table('products')->where('category_product_id','=',1)
                                         ->join('product_details','product_details.id','=','products.id')
                                         ->get();
      }else{
         $query_list = DB::table('products')->where('company_id','=', 0)
                                            ->join('product_details','product_details.id','=','products.id');

         foreach ($companies as $company) {
            $subquery = DB::table('products')->where('company_id','=', $company->id)
                                             ->where('category_product_id','=',1)
                                             ->join('product_details','product_details.id','=','products.id');

            $query_list = $query_list->union($subquery);
         }
         $laptops = $query_list->get();
      }

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

      $wish_lists = DB::table('wish_list_products')->where('wish_list_id', '=', $wish_list_id)
                                                   ->select('product_id')
                                                   ->get();

      if(empty($companies)){

         $laptops = DB::table('products')->where('category_product_id','=',2)
                                         ->join('product_details','product_details.id','=','products.id')
                                         ->get();
      }else{
         $query_list = DB::table('products')->where('company_id','=', 0)
                                            ->join('product_details','product_details.id','=','products.id');

         foreach ($companies as $company) {
            $subquery = DB::table('products')->where('company_id','=', $company->id)
                                             ->where('category_product_id','=',2)
                                             ->join('product_details','product_details.id','=','products.id');

            $query_list = $query_list->union($subquery);
         }
         $laptops = $query_list->get();
      }

      $data = [
         'auth'       => $auth,
         'laptops'    => $laptops,
         'wish_lists' => $wish_lists,
      ];

      return response()->json($data);
   }

}
