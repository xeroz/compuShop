<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Company;

use DB;

class HomeController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {
      $companies        = Company::all();
      $lastest_products = DB::table('products')->join('product_details', 'product_details.id', '=', 'products.id')
                                               ->take(4)
                                               ->orderBy('products.id', 'desc')
                                               ->get();

      $data = [
         'companies'        => $companies,
         'lastest_products' => $lastest_products,
      ];

      return view('home.index', $data);
   }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function getLogIn()
   {
     return view('account.log_in');
   }

   public function getCreateAccount()
   {
      return view('account.create');
   }
}
