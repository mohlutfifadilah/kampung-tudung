<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('video')->insert([
            'link' => 'WhD9tbrUbnE',
            'deskripsi' => 'Kalian bisa lihat video profil Desa Wisata Kampung Tudung di channel YouTube kami',
        ]);
    }
}
