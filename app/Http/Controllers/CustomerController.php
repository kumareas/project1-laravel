<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
 /* public function first($id, $name)
  {
    return "ID=>".$id." Name=>".$name;
  }
   public function customer()
   {
       return view ('customer', ['isShow' => true]);
   }*/

   public function index()
   {
     return view('customer.create');
   }

   public function save(Request $request)
   {
     return $request;
   }
}
