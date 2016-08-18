<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{

   protected $table = 'Materi';

   public function SubKategori()
   {
      return $this->belongsTo('App\SubKategori', 'Id_SubKategori');
   }
}
