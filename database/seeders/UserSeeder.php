<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role' => 0,
            'username' => 'admin',
            // 'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
