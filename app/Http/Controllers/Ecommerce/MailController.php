<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Mail;
use PDF;

class MailController extends Controller
{
   public function sendWishList($id)
   {
      $wish_list_id = $id;

      $wish_list_products = DB::table('wish_list_products')
                                       ->where('wish_list_id', '=', $wish_list_id)
                                       ->join('products', 'products.id', '=', 'wish_list_products.product_id')
                                       ->join('product_details', 'product_details.id', '=', 'products.id')
                                       ->select('products.id','products.name', 'product_details.stock', 'product_details.price')
                                       ->get();

      $data = [
         'wish_list_products' => $wish_list_products,
      ];

      return PDF::loadView('emails.wish_list', $data)->download('nombre.pdf');

      //return view('emails.wish_list', $data);

      /*Mail::send('emails.base', $data, function($message){
         //remitente
         $message->from('admin@compushop.com', 'Puto');

         //receptor
         $message->to('chavezvasquezjuan@gmail.com')->subject('Notificación');

      });

      return "Se envío email";*/
   }
}
