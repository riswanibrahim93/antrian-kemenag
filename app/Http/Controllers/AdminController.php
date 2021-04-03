<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Admin::all();
        return view('petugas/kelolaAdmin', ['petugas' => $petugas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' =>  ['required', 'string', 'max:255', 'unique:users'],
            'name' => 'required',
            'jabatan' => 'required',
            'password' => 'required'
        ]);
        Admin::create([
            'nip' => $request['nip'],
            'name' => $request['name'],
            'jabatan' => $request['jabatan'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/kelolaAdmin')->with('status', 'Tambah Data Petugas Berhasil');
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
        // dd($id);
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
        Admin::where('nip', $id)
            ->update([
            'nip' => $request->nip,
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'password' => $request->password
        ]);
        return redirect('/kelolaAdmin')->with('update', 'Ubah Data Petugas Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('admins')->where('nip', $id)->delete();
        return redirect('/kelolaAdmin')->with('hapus', 'Hapus Petugas Berhasil');
    }
}
