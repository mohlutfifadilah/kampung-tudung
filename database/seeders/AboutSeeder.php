<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('about')->insert([
            'foto' => 'selfie.jpg',
            'deskripsi' => 'Kampung Tudung merupakan desa wisata yang terletak di Desa Grujugan, Kecamatan Petanahan, Kabupaten Kebumen. Wisata pendidikan atau wisata edukasi, bisa juga disebut sebagai anjangkarya atau karyawisata adalah suatu kegiatan atau perjalanan yang dilakukan untuk rekreasi atau liburan dan juga terdapat aktivitas edukasi atau pendidikan di dalamnya. Ada banyak kegiatan wisata edukasi yang bisa di lakukan khususnya bagi anak- anak untuk di Desa Wisata Kampung Tudung, anak-anak biasa belajar membuat Tudung/Caping, Besek, Ilir/kipas dan anyaman dari bambu.',
        ]);
    }
}
