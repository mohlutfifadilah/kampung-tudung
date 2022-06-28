<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admin = Admin::all();
        return view('admin.admin', [
            'title' => 'admin',
            'admin' => $admin
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
        return view('admin.admin-create', [
            'title' => 'admin'
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
        $username     = $request->username;
        $password     = $request->password;

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/create')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Admin', 'type' => 'error']);
        }

        $admin = new Admin;

        $admin->username = $username;
        $admin->password = Hash::make($password);

        $admin->save();

        return redirect('admin')->with(['status' => 'Berhasil Ditambahkan', 'title' => 'Data Admin', 'type' => 'success']);
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
        $id  = Admin::find($id);
        return view('admin.admin-edit', [
            'id' => $id,
            'title' => 'admin'
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
        $username     = $request->username;
        $password     = $request->password;

        $validator = Validator::make($request->all(), [
            'username'        => 'required',
            'password'        => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('admin/' . $id . '/edit')->withErrors($validator)
                ->withInput()->with(['status' => 'Terjadi Kesalahan', 'title' => 'Data Admin', 'type' => 'error']);
        }

        DB::table('users')
            ->where('id', $id)
            ->update([
                'username'       => $username,
                'password'       => Hash::make($password),
            ]);

        return redirect('admin')->with(['status' => 'Berhasil Diubah', 'title' => 'Data Admin', 'type' => 'success']);
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
        $admin  = Admin::find($id);
        $admin->delete();

        return redirect('admin')->with(['status' => 'Berhasil Dihapus', 'title' => 'Data Admin', 'type' => 'success']);
    }
}
