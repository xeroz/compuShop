<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;

use Auth;

use DB;

use App\Models\User;
use App\Models\WishListProduct;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getLogIn()
   {
     return view('user.log_in');
   }

   public function postLogIn(Request $request)
   {
      $this->validate($request, [
         'email'    => 'required',
         'password' => 'required',
      ]);


      //$wish_list_products = WishListProduct::where('')

      $data = [
         'email'    => $request->input('email'),
         'password' => $request->input('password'),
      ];

      if (Auth::attempt($data)) {
         return redirect()->route('user.profile');
      }

      return redirect()->back();
   }

   public function getCreateAccount()
   {
      return view('user.create');
   }

   public function postCreateAccount(Request $request)
   {
      $this->validate($request, [
         'name'      => 'required',
         'lastname'  => 'required',
         'cellphone' => 'required',
         'email'     => 'required',
         'password'  => 'required|confirmed',
      ]);

      $name      = $request->input('name');
      $lastname  = $request->input('lastname');
      $cellphone = $request->input('cellphone');
      $email     = $request->input('email');
      $password  = $request->input('password');


      $user = new User();

      $user->name      = $name;
      $user->lastname  = $lastname;
      $user->cellphone = $cellphone;
      $user->email     = $email;
      $user->password  = bcrypt($password);

      $user->save();

      return redirect()->route('user.create');
   }

   public function getProfile()
   {
      $wish_list_id = Auth::user()->id;

      $wish_list_products = DB::table('wish_list_products')
                                       ->where('wish_list_id', '=', $wish_list_id)
                                       ->join('products', 'products.id', '=', 'wish_list_products.product_id')
                                       ->join('product_details', 'product_details.id', '=', 'products.id')
                                       ->select('products.id','products.name', 'product_details.stock', 'product_details.price')
                                       ->get();

      $data = [
         'wish_list_products' => $wish_list_products,
      ];

      return view('user.profile', $data);
   }

   public function getLogout()
   {
      Auth::logout();

      return redirect()->back();
   }

   public function authenticate($data)
   {
      if (Auth::attempt($data)) {
         return redirect()->route('user.profile');
      }
   }

   public function getWhishList($id)
   {
      $product_id   = $id;
      $wish_list_id = Auth::user()->id;

      $wish_list_product = new WishListProduct();

      $wish_list_product->wish_list_id = $wish_list_id;
      $wish_list_product->product_id   = $product_id;

      $wish_list_product->save();

      return redirect()->back();
   }

   public function getWhishListDelete($id)
   {
      $product_id = $id;

      DB::table('wish_list_products')->where('wish_list_products.product_id', '=', $product_id)
                                     ->delete();

      return redirect()->back();
   }

}
