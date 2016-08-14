<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class hapusController extends Controller
{
    //

    public function hapus($id)
  {

      $delete = DB::table('Artikel')->where('Id', $id)->delete();

      //$delete->delete();

      echo var_dump($delete);

      return redirect('AdminAllArtikel');
  }
}
