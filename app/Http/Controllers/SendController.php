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
        if ($paket == 'Paket Eduwisata') {
            $paket = 15000;
        } else if ($paket == 'Paket Spot Selfie') {
            $paket = 10000;
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
            return redirect('/admin/create')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Admin', 'type' => 'error']);
        }

        // $admin = new Admin;

        // $admin->username = $username;
        // $admin->password = Hash::make($password);

        // $admin->save();

        // return redirect('admin')->with(['status' => 'Berhasil Ditambahkan', 'title' => 'Data Admin', 'type' => 'success']);
    }
}
