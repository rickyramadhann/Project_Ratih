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
      $kategori = DB::table('Kategori')->get();

      $test2 = DB::table('SubKategori')->get();

      $test = DB::table('Materi')->limit(2)->orderBy('created_at')->get();

      return view ('Category',['Isi_Artikel'=>$test,'Nama_Kategori' => $kategori,'test2' => $test2]);
   }

   public function simpan(Request $r){
      $kategori = $r->input('kategori');
      $judul = $r->input('judul');
      $SubKategori = $r->input('SubKategori');
      $isi = $r->input('isi');
      $penulis = $r->input('penulis');

      DB::table('Materi')->insert([
          'Id' => null,
          'Judul_Materi' => $judul,
          'Isi_Materi' => $isi,
          'Penulis' => $penulis,
          'Kategori' => $kategori,

     ]);

     DB::table('SubKategori')->insert([
         'Id_SubKategori' => null,
         'Nama_SubKategori' => $SubKategori,
    ]);
      return redirect(url('Category'));

  }

}
