<?php

use Illuminate\Database\Seeder;


class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Materi')->insert([
           'Judul_Materi' => 'sdgjseugbsdrugvuy',
           'Isi_Materi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
           'Penulis' => 'smdamlfa',
           'Kategori' => 'sndalndnanlda',
           'created_at' => new DateTime()
           'Id_Subkategori' => 'sndalndnanlda',

      ]);
    }
}
