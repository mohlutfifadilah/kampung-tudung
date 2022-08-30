<?php

namespace App\Http\Controllers;

use App\Models\Termasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TermasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $include = Termasuk::groupBy('nama')->paginate(10);
        return view('admin.termasuk', [
            'title' => 'termasuk',
            'include' => $include
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
        return view('admin.termasuk-create', [
            'title' => 'termasuk'
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

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/termasuk/create')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Include Paket', 'type' => 'error']);
        }

        $include = new Termasuk;

        $include->id_paket = 'dwa';
        $include->nama = $nama;

        $include->save();

        return redirect('termasuk')->with(['status' => 'Berhasil Ditambahkan', 'title' => 'Data Include Paket', 'type' => 'success']);
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
        $id  = Termasuk::find($id);
        return view('admin.termasuk-edit', [
            'id' => $id,
            'title' => 'termasuk'
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

        $validator = Validator::make($request->all(), [
            'nama'        => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('termasuk/' . $id . '/edit')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Include Paket', 'type' => 'error']);
        }

        DB::table('termasuk')
            ->where('id', $id)
            ->update([
                'nama'       => $nama,
            ]);

        return redirect('termasuk')->with(['status' => 'Berhasil Diubah', 'title' => 'Data Include Paket', 'type' => 'success']);
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
        $include  = Termasuk::find($id);
        $include->delete();

        return redirect('termasuk')->with(['status' => 'Berhasil Dihapus', 'title' => 'Data Include Paket', 'type' => 'success']);
    }
}
