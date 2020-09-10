<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\Materi;
use App\User;
use App\Kelas;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
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

        $pesertas = DB::table('kelas')
            ->join('pesertas', 'kelas.id', 'pesertas.kelas_id')
            ->where('pesertas.user_id', $user_id)
            ->get();
        // echo "<pre>";
        // print_r($pesertas);
        return view('peserta.index')->with('pesertas', $pesertas);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user_id = auth()->user()->id;
        // $peserta = Peserta::find($id);
        $peserta = DB::table('kelas')
            ->join('pesertas', 'kelas.id', 'pesertas.kelas_id')
            ->where('pesertas.id', $id)
            ->first();

        $kelas_id = DB::table('kelas')
            ->join('pesertas', 'kelas.id', 'pesertas.kelas_id')
            ->where('pesertas.id', $id)
            ->first()->kelas_id;
        $kelas_slug = DB::table('kelas')
            ->join('pesertas', 'kelas.id', 'pesertas.kelas_id')
            ->where('pesertas.id', $id)
            ->first()->slug;

        $materi_pertama_slug = Materi::where('kelas_id', $kelas_id)->first()->slug;

        $user_creator_and_kelas = DB::table('kelas')
            ->join('users', 'kelas.user_id', 'users.id')
            ->where('kelas.id', $kelas_id)
            ->first();

        // return $pesertas;
        // echo "<pre>";
        // print_r($user_creator_and_kelas);
        return view('peserta.peserta_info')
            ->with('peserta', $peserta)
            ->with('kelas', $user_creator_and_kelas)
            ->with('materi_slug', $materi_pertama_slug)
            ->with('kelas_slug', $kelas_slug);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peserta = Peserta::find($id);
        return view('peserta.edit_peserta')->with('peserta', $peserta);
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
        $peserta = Peserta::find($id);
        $peserta->rating = $request->input('rating');
        $peserta->testimoni = $request->input('testimoni');
        $peserta->save();
        return redirect()->to('peserta/' . $id)->with('success', 'Anda telah memberikan feedback terhadap kelas ini');
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
