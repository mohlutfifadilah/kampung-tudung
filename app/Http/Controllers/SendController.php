<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Confirm;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Notifications\OrderProcessed;

class SendController extends Controller
{
    //
    public function send(Request $request)
    {
        // Mail::to('kampungtudung12@gmail.com')->send(new SendMail());
        // dd('sukses');
        // dd($request);
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kontak' => 'required',
            'email' => 'email:rfc,dns|nullable',
            'alamat' => 'required',
            'tanggal' => 'required',
            'paket' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/#booking')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Gagal memesan tiket', 'type' => 'error']);
        }
        $nama      = $request->nama;
        $kontak    = $request->kontak;
        $wa        = $request->wa;
        $email     = $request->email;
        $alamat    = $request->alamat;
        $tanggal   = $request->alternate;
        $paket     = $request->paket;
        $dewasa    = $request->dewasa;
        $anak      = $request->anak;
        $jumlah    = $dewasa + $anak;
        $pesan     = $request->pesan;
        $p         = Paket::find($paket);

        $confirm = new Confirm;

        $confirm->nama = $nama;
        $confirm->kontak = $kontak;
        $confirm->wa = $wa;
        $confirm->email = $email;
        $confirm->alamat = $alamat;
        $confirm->tanggal = $tanggal;
        $confirm->paket = $paket;
        $confirm->dewasa = $dewasa;
        $confirm->anak = $anak;
        $confirm->jumlah = $jumlah;
        $confirm->pesan = $pesan;
        $confirm->total =
            $p->harga * (int) $jumlah;
        $confirm->status = 0;

        $confirm->save();

        // if ($wa) {
        // } else if ($email) {
        //     Mail::to($email)->send(new SendMail());
        // } else {
        // }

        return redirect('/')->with(['status' => 'Berhasil', 'title' => 'Berhasil Booking', 'type' => 'success']);
    }
}
