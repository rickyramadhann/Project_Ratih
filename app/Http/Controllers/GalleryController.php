<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class GalleryController extends Controller
{
    //
    public function Gallery(){
      $judul = DB::table('Kategori')->get();
     return view('Gallery', ['Nama_Kategori' => $judul]);

   }
}
