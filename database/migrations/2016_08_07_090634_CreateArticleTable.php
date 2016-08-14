<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Artikel', function (Blueprint $table) {
           $table->increments('Id');
           $table->string('Judul_Artikel');
           $table->string('Isi_Artikel');
           $table->string('Penulis');
           $table->string('Kategori');
           $table->timestamps('created_at');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('Artikel');
    }
}
