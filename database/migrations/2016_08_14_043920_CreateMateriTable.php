<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Materi', function (Blueprint $table) {
          $table->increments('Id');
          $table->string('Judul_Materi');
          $table->string('Isi_Materi');
          $table->string('Penulis');
          $table->string('Kategori');
          $table->timestamps('created_at');
          $table->integer('Id_Subkategori');
          $table->foreign('Id_Subkategori')->reference('Id_SubKategori')->on('SubKategori')-onDelete('CASCADE');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('Materi');
    }
}
