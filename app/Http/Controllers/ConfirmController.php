<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confirm;
use App\Models\Paket;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $confirm = Confirm::where('status', 0)->paginate(10);
        $paket = Paket::all();
        return view('admin.confirm', [
            'title' => 'confirm',
            'confirm' => $confirm,
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
        $confirm = Confirm::find($id);
        return view('admin.confirm-show', [
            'confirm' => $confirm,
            'title'   => 'confirm'
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
        $confirm = Confirm::find($id);

        DB::table('pesan')
            ->where('id', $id)
            ->update([
                'status'      => 1,
            ]);

        return redirect('confirm')->with(['status' => 'Berhasil Dikonfirmasi', 'title' => 'Data Pesanan', 'type' => 'success']);
    }
}
