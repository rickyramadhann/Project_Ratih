<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class AdminAllArtikelController extends Controller
{
    //
     public function AdminAllArtikel(){
        $table = DB::table('Materi')->get();
        return view ('AdminAllArtikel',['records'=>$table]);
     }

     public function hapus($id){

        echo $id;
        $delete = DB::table('Materi')->where('Id', $id)->first();
        $delete->delete();

        //return redirect(url('AdminAllArtikel'));

     }

}
