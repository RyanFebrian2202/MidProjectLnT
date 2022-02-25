<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'judul' => 'Hello World',
            'penulis' => 'Ryan Febrian',
            'jumlah_halaman' => 222,
            'tahun_terbit' => 2002,
        ]);

        DB::table('books')->insert([
            'judul' => 'Aghanim Labyrinth',
            'penulis' => 'Derian Ardenichson',
            'jumlah_halaman' => 1205,
            'tahun_terbit' => 2021,
        ]);

        DB::table('books')->insert([
            'judul' => 'Magnus Chase',
            'penulis' => 'Timoteus Fabian',
            'jumlah_halaman' => 290,
            'tahun_terbit' => 2009,
        ]);

        DB::table('books')->insert([
            'judul' => 'How to sleep',
            'penulis' => 'Vincensius Ivank',
            'jumlah_halaman' => 862,
            'tahun_terbit' => 2000,
        ]);
    }
}
