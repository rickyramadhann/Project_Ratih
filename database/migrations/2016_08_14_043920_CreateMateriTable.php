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
          $table->string('Id_Subkategori');

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
