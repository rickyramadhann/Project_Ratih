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
          $table->integer('Id_Kategori');
          $table->foreign('Id_Kategori')->reference('Id_Kategori')->on('Kategori')->onDelete('CASCADE');

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
