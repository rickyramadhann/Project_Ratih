<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('Kategori')->insert([
           'Nama_Kategori' => 'sdgjseugbsdrugvuy',
      ]);
    }
}
