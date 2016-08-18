<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class ReadArticleController extends Controller
{
    //

    public function ReadArticle($Id){


      $kategori = DB::table('Kategori')->get();


      $test2 = DB::table('Materi')->where ('Id',$Id)->get();
      return view ('ReadArticle', ['test2'=> $test2],['Nama_Kategori' => $kategori]);
   }
}
