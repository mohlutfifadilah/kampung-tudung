<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about = About::paginate(10);
        return view('admin.about', [
            'title' => 'about',
            'about' => $about
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
        $id  = About::find($id);
        return view('admin.about-edit', [
            'id' => $id,
            'title' => 'about'
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
        $about = About::find($id);
        $deskripsi     = $request->deskripsi;

        $validator = Validator::make($request->all(), [
            'gambar' => 'image|file',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('about/' . $id . '/edit')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Tentang Kami', 'type' => 'error']);
        }
        if ($request->file('gambar')) {
            Storage::delete($about->foto);
            $gambar = $request->file('gambar')->store('tentangkami');
            DB::table('about')
                ->where('id', $id)
                ->update([
                    'deskripsi'   => $deskripsi,
                    'foto'      => $gambar,
                ]);
        } else {

            DB::table('about')
                ->where('id', $id)
                ->update([
                    'deskripsi'   => $deskripsi,
                ]);
        }

        return redirect('about/')->with(['status' => 'Berhasil Diubah', 'title' => 'Tentang Kami', 'type' => 'success']);
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
