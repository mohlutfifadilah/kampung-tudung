<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gallery = Gallery::paginate(10);
        return view('admin.gallery', [
            'title' => 'gallery',
            'gallery' => $gallery
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
        return view('admin.gallery-create', [
            'title' => 'gallery'
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

        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|file',
        ]);

        if ($validator->fails()) {
            return redirect('/gallery/create')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Galeri', 'type' => 'error']);
        }

        if ($request->file('gambar')) {
            $gambar = $request->file('gambar')->store('gallery-image');
        }

        $gallery = new Gallery;

        $gallery->foto = $gambar;

        $gallery->save();

        return redirect('gallery/')->with(['status' => 'Berhasil Ditambahkan', 'title' => 'Data Galeri', 'type' => 'success']);
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
        $id  = Gallery::find($id);
        return view('admin.gallery-edit', [
            'id' => $id,
            'title' => 'gallery'
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
        $u = Gallery::find($id);
        $gambar = $u->foto;
        $validator = Validator::make($request->all(), [
            'gambar' => 'image|file',
        ]);

        if ($validator->fails()) {
            return redirect('gallery/' . $id . '/edit')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Galeri', 'type' => 'error']);
        }

        if ($request->file('gambar')) {
            Storage::delete($gambar);
            $gambar = $request->file('gambar')->store('gallery-image');
        }

        DB::table('galeri')
            ->where('id', $id)
            ->update([
                'foto'      => $gambar,
            ]);

        return redirect('gallery/')->with(['status' => 'Berhasil Diubah', 'title' => 'Data Galeri', 'type' => 'success']);
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
        $gallery = Gallery::find($id);
        Storage::delete($gallery->foto);
        Gallery::destroy($id);

        return redirect('gallery/')->with(['status' => 'Berhasil Dihapus', 'title' => 'Data Galeri', 'type' => 'success']);
    }
}
