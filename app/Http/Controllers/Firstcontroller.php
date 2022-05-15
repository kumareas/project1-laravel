<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Firstcontroller extends Controller
{
    public function first($id)
    {
      return view('user.create',['name' => 'Naanum coder thaan']); 
    }
}
