<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\User;
use App\Kelas;

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
        $pesertas = Peserta::where('user_id', $user_id)->get(); // Ambil semua perserta dengan user id sekian
        // Ambil data kelas dari semua peserta yang telah diambil
        // pesertas punya kelas_id
        // ambil kelas dengan peserta[kelas_id];                                                                            
        // return Kelas::wherein('id', $pesertas['kelas_id'])->get();
        // return $pesertas['kelas_id'];
        foreach ($pesertas as $peserta) {
            return $peserta['kelas_id'];
        }
        // return $pesertas['kelas_id'];
        // return Kelas::where('id', $pesertas['kelas_id'])->get();
        // return view('peserta.index')->with('pesertas', $pesertas);
        // return view('peserta.index');
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
