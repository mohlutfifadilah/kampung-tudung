<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paket = Paket::paginate(10);
        return view('admin.paket', [
            'title' => 'paket',
            'paket' => $paket
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
        return view('admin.paket-create', [
            'title' => 'paket'
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
        $harga     = $request->harga;

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'harga' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/paket/create')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Paket', 'type' => 'error']);
        }

        $paket = new Paket;

        $paket->nama = $nama;
        $paket->harga = $harga;

        $paket->save();

        return redirect('paket')->with(['status' => 'Berhasil Ditambahkan', 'title' => 'Data Paket', 'type' => 'success']);
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
        $id  = Paket::find($id);
        return view('admin.paket-edit', [
            'id' => $id,
            'title' => 'paket'
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
        $nama     = $request->nama;
        $harga     = $request->harga;

        $validator = Validator::make($request->all(), [
            'nama'        => 'required',
            'harga'        => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('paket/' . $id . '/edit')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Paket', 'type' => 'error']);
        }

        DB::table('paket')
            ->where('id', $id)
            ->update([
                'nama'       => $nama,
                'harga'       => $harga,
            ]);

        return redirect('paket')->with(['status' => 'Berhasil Diubah', 'title' => 'Data Paket', 'type' => 'success']);
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
        $paket  = Paket::find($id);
        $paket->delete();

        return redirect('paket')->with(['status' => 'Berhasil Dihapus', 'title' => 'Data Paket', 'type' => 'success']);
    }
}
