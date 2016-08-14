<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

use Carbon\Carbon;


class CategoryController extends Controller
{
    //
    public function Category(){
      $kategori = DB::table('Artikel')->get();
      $test = DB::table('Artikel')->limit(2)->orderBy('created_at')->get();

      return view ('Category',['Isi_Artikel'=>$test],['kategori' => $kategori]);
   }

   public function simpan(Request $r){
      $kategori = $r->input('kategori');
      $judul = $r->input('judul');
      $isi = $r->input('isi');
      $penulis = $r->input('penulis');

      DB::table('Artikel')->insert([
          'Id' => null,
          'Judul_Artikel' => $judul,
          'Isi_Artikel' => $isi,
          'Penulis' => $penulis,
          'Kategori' => $kategori,

     ]);
      return redirect(url('Category'));

  }

}
