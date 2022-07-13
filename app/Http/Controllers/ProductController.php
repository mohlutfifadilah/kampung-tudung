<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        $product = Product::paginate(2);
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
        return view('admin.product-create', [
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
        $judul     = $request->judul;
        $deskripsi     = $request->deskripsi;

        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|file',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/product/create')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Produk', 'type' => 'error']);
        }

        if ($request->file('gambar')) {
            $gambar = $request->file('gambar')->store('product-image');
        }

        $product = new Product;

        $product->gambar = $gambar;
        $product->judul = $judul;
        $product->deskripsi = $deskripsi;

        $product->save();

        return redirect('product')->with(['status' => 'Berhasil Ditambahkan', 'title' => 'Data Produk', 'type' => 'success']);
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
