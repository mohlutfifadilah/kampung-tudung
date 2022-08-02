<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $coba  = User::find($id);
        $merchant = DB::table('merchant')->where('username', $coba->username)->first();
        return view('merchant.password-edit', [
            'merchant' => $merchant,
            'coba'       => $coba,
            'title' => 'password'
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
        // $merchant = DB::table('merchant')->where('username', $request->username)->first();
        $username     = $request->username;
        $password     = $request->password;

        $validator = Validator::make($request->all(), [
            'password'        => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('password/' . $id . '/edit')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Edit Password', 'type' => 'error']);
        }

        DB::table('merchant')
            ->where('username', $username)
            ->update([
                'password'       => Hash::make($password),
            ]);

        DB::table('users')
            ->where('id', $id)
            ->update([
                'password'       => Hash::make($password),
            ]);

        return redirect('password/' . $id . '/edit')->with(['status' => 'Berhasil Diubah', 'title' => 'Edit Password', 'type' => 'success']);
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
