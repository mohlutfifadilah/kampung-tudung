<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $merchant = Merchant::paginate(10);
        return view('admin.merchant', [
            'title' => 'Mitra',
            'merchant' => $merchant
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.merchant-create', [
            'title' => 'Mitra'
        ]);
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
        $nama     = $request->nama;
        // $harga     = $request->harga;
        $kode = Str::random(40);
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            // 'harga' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/merchant/create')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Mitra', 'type' => 'error']);
        }

        $merchant = new Merchant;

        $merchant->nama = $nama;
        $merchant->kode = $kode;
        // $merchant->harga = $harga;

        $merchant->save();

        $user = new User;

        $user->username = 'dwa';
        $user->password = Hash::make('dawd');
        $user->kode = $kode;

        $user->save();
        return redirect('merchant')->with(['status' => 'Berhasil Ditambahkan', 'title' => 'Data Mitra', 'type' => 'success']);
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
