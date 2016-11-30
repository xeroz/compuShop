<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Audio;
use App\Models\CategoryProduct;
use DB;

class AudioController extends Controller
{
   public function getAll()
   {
      $audios    = Audio::all();
      $companies = DB::table('products')->where('type_product_id', '=', '2')
                                        ->join('companies', 'companies.id', '=', 'products.company_id')
                                        ->select('companies.name', 'companies.id')
                                        ->distinct()
                                        ->get();

      $data = [
         'audios'    => $audios,
         'companies' => $companies,
      ];

      return view('audio.all', $data);
   }

   public function getHeadphone()
   {
      $laptops_office = CategoryProduct::find(3)->products;
      $companies      = DB::table('products')->where('category_product_id', '=', '3')
                                             ->join('companies', 'companies.id', '=', 'products.company_id')
                                             ->select('companies.name', 'companies.id')
                                             ->distinct()
                                             ->get();
                                             dd($companies);

      return view('audio.headphone');
   }

   public function getEarphone()
   {
      return view('audio.earphone');
   }

   public function getProduct($id)
   {
      $audio = Audio::find($id);

      $data = [
         'audio' => $audio,
      ];

      return view('audio.product', $data);
   }
}
