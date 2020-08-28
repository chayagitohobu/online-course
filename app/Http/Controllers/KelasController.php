<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
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
        $kelas = Kelas::all();
        // return $kelas;
        return view('kelas.index')->with('kelas', $kelas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('kelas.buat_kelas')->with('kelas', $kelas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kelas' => 'required'
        ]);

        $kelas = new Kelas;
        $kelas->nama_kelas = $request->input('nama_kelas');
        $kelas->deskripsi = $request->input('deskripsi');
        $kelas->jenjang = $request->input('jenjang');
        $kelas->tingkat = $request->input('tingkat');
        $kelas->level = $request->input('level');
        $kelas->harga = $request->input('harga');
        $kelas->diskon = $request->input('diskon');
        $kelas->durasi = $request->input('durasi');
        $kelas->kapasitas = $request->input('kapasitas');

        $kelas->foto = $request->input('foto');
        $kelas->video = $request->input('video');
        $kelas->kategori = $request->input('kategori');
        $kelas->berbayar = $request->input('berbayar');
        $kelas->status = $request->input('status');
        $kelas->slug = $request->input('slug');

        $kelas->save();

        return redirect('/kelas')->with('success', 'Kelas telah di buat');
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
    }
}
