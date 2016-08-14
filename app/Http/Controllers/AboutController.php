<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    //

    public function About()
  {
     $judul = DB::table('Artikel')->get();
    return view('home', ['judul' => $judul]);
      return view('About');
  }
}
