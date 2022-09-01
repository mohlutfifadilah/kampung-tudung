<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $article = Article::paginate(10);
        return view('admin.article', [
            'title' => 'article',
            'article' => $article
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
        return view('admin.article-create', [
            'title' => 'article'
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
        $penulis     = $request->penulis;
        $isi     = $request->isi;

        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'penulis' => 'required',
            'isi' => 'required',
            'thumbnail' => 'required|image|file',
        ]);

        if ($validator->fails()) {
            return redirect('/article/create')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Artikel', 'type' => 'error']);
        }

        if ($request->file('thumbnail')) {
            $thumbnail = $request->file('thumbnail')->store('thumbnail-image');
        }

        $article = new Article;

        $article->judul = $judul;
        $article->penulis = $penulis;
        $article->isi = $isi;
        $article->thumbnail = $thumbnail;

        $article->save();

        return redirect('article')->with(['status' => 'Berhasil Ditambahkan', 'title' => 'Data Artikel', 'type' => 'success']);
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
        $article = Article::find($id);
        return view('admin.article-show', [
            'article' => $article,
            'title'   => 'article'
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
        $id  = Article::find($id);
        return view('admin.article-edit', [
            'id' => $id,
            'title' => 'article'
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
        $judul     = $request->judul;
        $penulis     = $request->penulis;
        $isi     = $request->isi;
        $t = Article::find($id);
        $thumbnail = $t->thumbnail;

        $validator = Validator::make($request->all(), [
            'judul'        => 'required',
            'penulis'        => 'required',
            'isi'        => 'required',
            'thumbnail' => 'required|image|file',
        ]);

        if ($validator->fails()) {
            return redirect('article/' . $id . '/edit')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Artikel', 'type' => 'error']);
        }
        if ($request->file('thumbnail')) {
            Storage::delete($thumbnail);
            $thumbnail = $request->file('thumbnail')->store('thumbnail-image');
        }
        DB::table('article')
            ->where('id', $id)
            ->update([
                'judul'       => $judul,
                'penulis'       => $penulis,
                'isi'       => $isi,
                'thumbnail'       => $thumbnail
            ]);

        return redirect('article')->with(['status' => 'Berhasil Diubah', 'title' => 'Data Artikel', 'type' => 'success']);
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
        $admin  = Article::find($id);
        Storage::delete($admin->thumbnail);
        $admin->delete();

        return redirect('article')->with(['status' => 'Berhasil Dihapus', 'title' => 'Data Article', 'type' => 'success']);
    }
}
