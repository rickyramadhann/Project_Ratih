<?php

use Illuminate\Database\Seeder;

class SubKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('SubKategori')->insert([
           'Nama_SubKategori' => 'sdgjseugbsdrugvuy',
      ]);
    }
}
