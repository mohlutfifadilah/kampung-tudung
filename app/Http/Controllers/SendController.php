<?php

namespace App\Http\Controllers;

use App\Models\Confirm;
use App\Models\Paket;
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
        // if ($paket == 'Tudung') {
        //     $paket = 30000;
        // } else if ($paket == 'Ilir') {
        //     $paket = 23000;
        // } else if ($paket == 'Ethnik') {
        //     $paket = 30000;
        // } else if ($paket == 'Lukis Ilis') {
        //     $paket = 21000;
        // } else {
        //     $paket = 57500;
        // }
        $jumlah     = $request->jumlah;
        $email     = $request->email;
        $pesan     = $request->pesan;
        $p = Paket::find($paket);
        $total     = $p->harga * (int) $jumlah;

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'no' => 'required|numeric',
            'tanggal' => 'required',
            'paket' => 'required',
            'jumlah' => 'required|numeric|max:10',
            'email' => 'email:rfc,dns|required',
        ]);

        if ($validator->fails()) {
            return redirect('/#booking')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Gagal Booking', 'type' => 'error']);
        }

        $confirm = new Confirm;

        $confirm->nama = $nama;
        $confirm->alamat = $alamat;
        $confirm->nohp = $no;
        $confirm->tanggal = $tanggal;
        $confirm->paket = $paket;
        $confirm->jumlahorang = $jumlah;
        $confirm->email = $email;
        $confirm->catatan = $pesan;
        $confirm->total = $total;
        $confirm->status = 0;

        $confirm->save();

        return redirect('/')->with(['status' => 'Telah dikirim, cek email anda', 'title' => 'Berhasil Booking', 'type' => 'success']);
    }
}
