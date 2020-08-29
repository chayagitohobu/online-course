<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.user');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.user-edit')->with('user', $user);
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

        $this->validate($request, [
            'foto' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();

            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            $path = $request->file('foto')->storeAs('public/images/user', $fileNameToStore);
        } else {
            $fileNameToStore = 'user_default.png';
        }

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->foto = $fileNameToStore;
        $user->deskripsi_diri = $request->input('deskripsi_diri');
        $user->facebook = $request->input('facebook');
        $user->twitter = $request->input('twitter');
        $user->instagram = $request->input('instagram');
        $user->youtube = $request->input('youtube');
        $user->linkedin = $request->input('linkedin');
        $user->nomor_hp = $request->input('nomor_hp');
        $user->alamat = $request->input('alamat');
        $user->jk = $request->input('jk');
        $user->pekerjaan = $request->input('pekerjaan');
        $user->tanggal_lahir = $request->input('tanggal_lahir');
        $user->tempat_lahir = $request->input('tempat_lahir');
        $user->nik = $request->input('nik');
        $user->npwp = $request->input('npwp');
        $user->pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $user->kode_promosi = $request->input('kode_promosi');
        $user->kode_affilasi = $request->input('kode_affilasi');
        $user->save();

        return redirect('/user')->with('success', 'user updated');
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
