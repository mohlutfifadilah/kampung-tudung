<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $merchant = DB::table('merchant')->where('username', $user->username)->first();
        // $produk = Product::where('id', $merchant->id_produk)->count();
        return view('merchant.index', [
            'title' => 'profile',
            'merchant' => $merchant,
            // 'produk' => $produk
        ]);
        // dd($merchant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $id  = Merchant::find($id);
        return view('merchant.profile-edit', [
            'id' => $id,
            'title' => 'produk'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $u          = Merchant::find($id);
        $nama       = $request->nama;
        $wa         = $request->wa;
        $deskripsi  = $request->deskripsi;
        $foto       = $u->foto;

        $validator = Validator::make($request->all(), [
            'foto' => 'image|file',
            'nama' => 'required',
            'wa' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('profile/' . $id . '/edit')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Edit Profil', 'type' => 'error']);
        }

        if ($request->file('foto')) {
            Storage::delete($foto);
            $foto = $request->file('foto')->store('profile-image');
        }

        DB::table('merchant')
            ->where('id', $id)
            ->update([
                'nama'       => $nama,
                'wa'       => $wa,
                'deskripsi'   => $deskripsi,
                'foto'      => $foto,
            ]);

        return redirect('profile')->with(['status' => 'Berhasil Diubah', 'title' => 'Edit Profil', 'type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
