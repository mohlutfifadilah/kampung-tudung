<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Merchant;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
        $merchant = DB::table('merchant')->groupBy('username')->paginate(10);
        // $produk = Product::where('kode', $merchant->id_produk)->count();
        return view('admin.merchant', [
            'title' => 'merchant',
            'merchant' => $merchant,
            // 'produk' => $produk
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
            'title' => 'merchant'
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
        $username     = $request->username;
        $password     = $request->password;

        // $kode = Str::random(40);
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            // 'harga' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/merchant/create')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Mitra', 'type' => 'error']);
        }

        $merchant = new Merchant;

        $merchant->nama = $nama;
        $merchant->username = $username;
        $merchant->password = Hash::make($password);
        // $merchant->harga = $harga;

        $merchant->save();

        $user = new User;

        $user->role = 1;
        $user->username = $username;
        $user->password = Hash::make($password);

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
        $merchant  = Merchant::find($id);
        $product = Product::where('id_merchant', $merchant->id)->paginate(10);
        return view('merchant-show', [
            'product' => $product,
            'merchant'       => $merchant,
            'title' => 'produk'
        ]);
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
        $merchant  = Merchant::find($id);
        $merchant->delete();

        $admin = Admin::where('username', $merchant->username);
        $admin->delete();
        return redirect('merchant')->with(['status' => 'Berhasil Dihapus', 'title' => 'Data Mitra', 'type' => 'success']);
    }
}
