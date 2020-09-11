<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;
use App\Kelas;
use App\User;
use Cviebrock\EloquentSluggable\Services\SlugService;

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

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $kelas = Kelas::where('user_id', $user_id)->first();
        $check_kategori = Kategori::where('id', $kelas->kategori_id)->first();

        if ($check_kategori != null || '') {
            $kategori = Kategori::where('id', $kelas->kategori_id)->first()->kategori;
        } else {
            $kategori = "";
        }
        return view('kelas.index')->with('kelas', $user->kelas)->with('kategori', $kategori);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return Kelas::where('user_id', '=', auth()->user()->id)->count() > 0;
        $kategoris = Kategori::all();
        if (Kelas::where('user_id', '=', auth()->user()->id)->count() > 0) {

            return redirect('/kelas')->with('danger', 'Anda telah membuat kelas');
        } else {
            $kelas = Kelas::all();
            return view('kelas.buat_kelas')->with('kelas', $kelas)->with('kategoris', $kategoris);
        }
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
            'nama_kelas' => 'required',
            'foto' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();

            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            $path = $request->file('foto')->storeAs('public/kelas', $fileNameToStore);
        } else {
            $fileNameToStore = 'default.png';
        }



        $kelas = new Kelas;
        $kelas->user_id = auth()->user()->id;

        $kelas->nama_kelas = $request->input('nama_kelas');
        $kelas->deskripsi = $request->input('deskripsi');
        $kelas->jenjang = $request->input('jenjang');
        $kelas->tingkat = $request->input('tingkat');
        $kelas->level = $request->input('level');
        $kelas->harga = $request->input('harga');
        $kelas->diskon = $request->input('diskon');
        $kelas->durasi = $request->input('durasi');
        $kelas->kapasitas = $request->input('kapasitas');

        $kelas->foto = $fileNameToStore;
        $kelas->video = $request->input('video');
        $kelas->kategori_id = $request->input('kategori');
        $kelas->berbayar = $request->input('berbayar');
        $kelas->status = $request->input('status');
        // $kelas->slug = $request->input('slug');
        $kelas->slug = SlugService::createSlug(Kelas::class, 'slug', $request->input('nama_kelas'));
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
        $kelas = Kelas::find($id);
        $kategoris = Kategori::all();
        return view('kelas.edit_kelas')->with('kelas', $kelas)->with('kategoris', $kategoris);
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
            'nama_kelas' => 'required',
            'foto' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();

            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            $path = $request->file('foto')->storeAs('public/kelas', $fileNameToStore);
        } else {
            $fileNameToStore = 'default.png';
        }

        $kelas = Kelas::find($id);
        $kelas->nama_kelas = $request->input('nama_kelas');
        $kelas->deskripsi = $request->input('deskripsi');
        $kelas->jenjang = $request->input('jenjang');
        $kelas->tingkat = $request->input('tingkat');
        $kelas->level = $request->input('level');
        $kelas->harga = $request->input('harga');
        $kelas->diskon = $request->input('diskon');
        $kelas->durasi = $request->input('durasi');
        $kelas->kapasitas = $request->input('kapasitas');

        $kelas->foto = $fileNameToStore;
        $kelas->video = $request->input('video');
        $kelas->kategori_id = $request->input('kategori');
        $kelas->berbayar = $request->input('berbayar');
        $kelas->status = $request->input('status');
        // $kelas->slug = $request->input('slug');
        $kelas->slug = SlugService::createSlug(Kelas::class, 'slug', $request->input('nama_kelas'));
        $kelas->save();

        return redirect('/kelas')->with('success', 'Kelas telah di edit');
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
