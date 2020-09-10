<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kelas;
use App\Peserta;
use App\Materi;
use App\User;
use App\SudahBaca;


class LihatMateriController extends Controller
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

    public function tampilmateri($kelas_slug, $materi_slug)
    {

        $kelas = Kelas::where('slug', $kelas_slug)->first();
        $kelas_id = $kelas['id'];

        $materi = Materi::where('slug', $materi_slug)->first();
        $urutan = $materi['urutan'];

        $materis = DB::table('materis')
            ->where('materis.urutan', $urutan)
            ->where('materis.kelas_id', $kelas_id)
            ->get();



        $materi = DB::table('materis')
            ->where('materis.urutan', $urutan)
            ->where('materis.kelas_id', $kelas_id)
            ->first();

        $daftarmateri = DB::table('materis')
            ->where('materis.kelas_id', $kelas_id)
            ->orderBy('urutan', 'asc')
            ->get();

        $banyakmateri = $daftarmateri->count();

        $kelas = DB::table('kelas')
            ->where('id', $kelas_id)
            ->first();


        if (!empty($materi->id)) {
            $sudahbaca = new SudahBaca;
            $sudahbaca->kelas_id = $kelas_id;
            $sudahbaca->user_id = auth()->user()->id;
            $sudahbaca->materi_id = $materi->id;
            $sudahbaca->save();
        }


        if ($urutan < $banyakmateri) {
            $materi_selanjutnya = DB::table('materis')
                ->where('materis.urutan', $urutan + 1)
                ->where('materis.kelas_id', $kelas_id)
                ->first()->slug;
        } else {
            $materi_selanjutnya = DB::table('materis')
                ->where('materis.urutan', $urutan)
                ->where('materis.kelas_id', $kelas_id)
                ->first()->slug;
        }

        if ($urutan >= 2) {

            $materi_sebelumnya = DB::table('materis')
                ->where('materis.urutan', $urutan - 1)
                ->where('materis.kelas_id', $kelas_id)
                ->first()->slug;
        } else {
            $materi_sebelumnya = DB::table('materis')
                ->where('materis.urutan', $urutan)
                ->where('materis.kelas_id', $kelas_id)
                ->first()->slug;
        }

        // echo "<pre>";
        // print_r($materis);

        // print_r($kelas);
        return view('materi.baca_materi')
            ->with('materis', $materis)
            ->with('kelas', $kelas)
            ->with('daftarmateri', $daftarmateri)
            ->with('materi_selanjutnya', $materi_selanjutnya)
            ->with('materi_sebelumnya', $materi_sebelumnya);
    }

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
    public function show()
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
