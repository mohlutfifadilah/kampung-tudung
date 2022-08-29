<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Termasuk;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        $included = Termasuk::groupBy('nama')->get();
        return view('admin.paket', [
            'title' => 'paket',
            'paket' => $paket,
            'included' => $included
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
        $include = Termasuk::groupBy('nama')->get();
        return view('admin.paket-create', [
            'title' => 'paket',
            'include' => $include
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
        $include = $request->include;
        $kode = Str::random(40);

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'harga' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/paket/create')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Paket', 'type' => 'error']);
        }

        $paket = new Paket;

        $paket->id_paket = $kode;
        $paket->nama = $nama;
        $paket->harga = $harga;

        $paket->save();


        foreach ($include as $i) {
            $include = new Termasuk;
            $include->id_paket = $kode;
            $include->nama = $i;

            $include->save();
        }

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
        $idp  = Paket::find($id);
        $include = DB::table('paket')->where('id_paket', $idp->id_paket)->first();
        $included = Termasuk::groupBy('nama')->get();
        $includee = DB::table('termasuk')->where('id_paket', $include->id_paket)->groupBy('nama')->value('nama');
        return view('admin.paket-edit', [
            'id' => $idp,
            'title' => 'paket',
            'include' => $include,
            'included' => $included,
            'includee' => $includee
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
        $idp  = Paket::find($id);
        $nama     = $request->nama;
        $harga     = $request->harga;
        $include = $request->include;

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

        foreach ($include as $i) {
            DB::table('termasuk')
                ->where('id_paket', $idp->id_paket)
                ->update([
                    'nama'       => $include,
                ]);
        }

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
