<?php
namespace App\Persistences\Product;

use DB;

class ProductPersistenceEloquent implements ProductPersistenceInterface {

   public function getCompaniesByTypeProduct($type_product_id)
   {
      $companies = DB::table('products')->where('type_product_id', '=', $type_product_id)
                                        ->join('companies', 'companies.id', '=', 'products.company_id')
                                        ->select('companies.name', 'companies.id')
                                        ->distinct()
                                        ->get();

      return $companies;
   }

   public function getCompaniesByCategoryProduct($type_product_id)
   {
      $companies = DB::table('products')->where('category_product_id', '=', $type_product_id)
                                        ->join('companies', 'companies.id', '=', 'products.company_id')
                                        ->select('companies.name', 'companies.id')
                                        ->distinct()
                                        ->get();

      return $companies;
   }

   public function filterProductByCompany($companies)
   {
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

      return $laptops;
   }
}