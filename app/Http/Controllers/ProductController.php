<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::paginate(10);
        return view('admin.product', [
            'title' => 'produk',
            'product' => $product
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
        return view('merchant.product-create', [
            'title' => 'produk'
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
        $coba  = User::find($request->id);
        $merchant = DB::table('merchant')->where('username', $coba->username)->first();
        // $product = Product::where('id', $merchant->id_produk)->paginate(10);
        // dd($merchant->id);
        $judul         = $request->judul;
        $deskripsi     = $request->deskripsi;
        $harga         = $request->harga;
        $kode = Str::random(40);

        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|file',
            'judul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/product/create')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Produk', 'type' => 'error']);
        }

        if ($request->file('gambar')) {
            $gambar = $request->file('gambar')->store('product-image');
        }

        $product = new Product;

        $product->kode = $kode;
        $product->id_merchant = $merchant->id;
        $product->gambar = $gambar;
        $product->judul = $judul;
        $product->deskripsi = $deskripsi;
        $product->harga = $harga;

        $product->save();

        $mer = new Merchant;

        $mer->id_produk = $kode;
        $mer->username = $merchant->username;
        $mer->password = $merchant->password;
        $mer->nama = $merchant->nama;
        $mer->foto = $merchant->foto;
        $mer->deskripsi = $merchant->deskripsi;
        $mer->wa = $merchant->wa;

        $mer->save();

        return redirect('product/' . $coba->id)->with(['status' => 'Berhasil Ditambahkan', 'title' => 'Data Produk', 'type' => 'success']);
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
        $coba  = User::find($id);
        $merchant = DB::table('merchant')->where('username', $coba->username)->first();
        $product = Product::where('id_merchant', $merchant->id)->paginate(10);
        return view('merchant.product-show', [
            'merchant' => $merchant,
            'product' => $product,
            'coba'       => $coba,
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
        $id  = Product::find($id);
        return view('merchant.product-edit', [
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
        $u = Product::find($id);
        $merchant = DB::table('merchant')->where('id_produk', $u->kode)->first();
        $user = DB::table('users')->where('username', $merchant->username)->first();
        $judul     = $request->judul;
        $harga     = $request->harga;
        $deskripsi     = $request->deskripsi;
        $gambar = $u->gambar;

        $validator = Validator::make($request->all(), [
            'gambar' => 'image|file',
            'judul' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('product/' . $id . '/edit')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Produk', 'type' => 'error']);
        }

        if ($request->file('gambar')) {
            Storage::delete($gambar);
            $gambar = $request->file('gambar')->store('product-image');
        }

        DB::table('produk')
            ->where('id', $id)
            ->update([
                'judul'       => $judul,
                'harga'       => $harga,
                'deskripsi'   => $deskripsi,
                'gambar'      => $gambar,
            ]);

        return redirect('product/' . $user->id)->with(['status' => 'Berhasil Diubah', 'title' => 'Data Produk', 'type' => 'success']);
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
        $produk = Product::find($id);
        Storage::delete($produk->gambar);
        Product::destroy($id);

        DB::table('merchant')->where('id_produk', $produk->kode)->delete();
        return redirect('product/' . $id)->with(['status' => 'Berhasil Dihapus', 'title' => 'Data Produk', 'type' => 'success']);
    }
}
