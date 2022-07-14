<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SendController extends Controller
{
    //
    public function send(Request $request)
    {
        $nama     = $request->nama;
        $alamat     = $request->alamat;
        $no     = $request->no;
        $tanggal     = $request->tanggal;
        $paket     = $request->paket;
        if ($paket == 'Tudung') {
            $paket = 30000;
        } else if ($paket == 'Ilir') {
            $paket = 23000;
        } else if ($paket == 'Ethnik') {
            $paket = 30000;
        } else if ($paket == 'Lukis Ilis') {
            $paket = 21000;
        } else {
            $paket = 57500;
        }
        $jumlah     = $request->jumlah;
        $pesan     = $request->pesan;
        $total     = $paket * $jumlah;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'alamat' => 'required',
            'no' => 'required',
            'tanggal' => 'required',
            'paket' => 'required',
            'jumlah' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/#booking')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Booking', 'type' => 'error']);
        }

        // $admin = new Admin;

        // $admin->username = $username;
        // $admin->password = Hash::make($password);

        // $admin->save();

        // return redirect('admin')->with(['status' => 'Berhasil Ditambahkan', 'title' => 'Data Admin', 'type' => 'success']);
    }
}
