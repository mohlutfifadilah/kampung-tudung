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
        $gambar     = $request->gambar;
        $judul     = $request->judul;
        $deskripsi     = $request->deskripsi;
        $a = $request->file('gambar')->getClientOriginalName();
        dd($a);
        // $password     = $request->password;

        // $validator = Validator::make($request->all(), [
        //         'username' => 'required',
        //         'password' => 'required',
        //     ]);

        // if ($validator->fails()) {
        //     return redirect('/admin/create')->withErrors($validator)
        //     ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Admin', 'type' => 'error']);
        // }

        // $admin = new Admin;

        // $admin->username = $username;
        // $admin->password = Hash::make($password);

        // $admin->save();

        // return redirect('admin')->with(['status' => 'Berhasil Ditambahkan', 'title' => 'Data Admin', 'type' => 'success']);
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
