<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminPostController extends Controller
{
    //
    public function Admin(){
      return view ('admin');
   }
}
