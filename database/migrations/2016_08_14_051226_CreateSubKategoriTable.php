<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('SubKategori', function (Blueprint $table) {
          $table->increments('Id_SubKategori');
          $table->string('Nama_SubKategori');
          $table->string('Id_Kategori');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('SubKategori');
    }
}
