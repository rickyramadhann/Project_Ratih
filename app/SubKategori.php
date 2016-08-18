<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{

   protected $table = 'SubKategori';
   

   public function Materi(){
      return $this->hasOne('App\Materi','Id_SubKategori');
   }

   public function Kategori()
   {
      return $this->belongsTo('App\Kategori');
   }

}
