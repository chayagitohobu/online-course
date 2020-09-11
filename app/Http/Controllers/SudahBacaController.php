<?php

namespace App\Http\Controllers;

use App\SudahBaca;
use Illuminate\Http\Request;
use App\Kelas;
use App\Materi;
use Illuminate\Support\Facades\DB;

class SudahBacaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addPaham($kelas_slug, $materi_slug)
    {
        $kelas = Kelas::where('slug', $kelas_slug)->first();
        $kelas_id = $kelas['id'];
        $materi = Materi::where('slug', $materi_slug)->first();

        $sudah_baca_id = DB::table('sudah_bacas')
            ->where('user_id', auth()->user()->id)
            ->where('kelas_id', $kelas_id)
            ->where('materi_id', $materi->id)
            ->first()->id;

        // return $sudah_baca_id;

        $sudahBaca = SudahBaca::find($sudah_baca_id);
        if ($sudahBaca->paham == 'tidak' || $sudahBaca->paham == null) {
            $sudahBaca->paham = 'ya';
        } else {
            $sudahBaca->paham = 'tidak';
        }

        $sudahBaca->save();
        // $udah_baca->paham = 'ya';
        // $udah_baca->save();
        // return redirect('/tampilmateri', ['kelas_slug' => $kelas_slug, 'materi_slug' => $materi_slug]);
        return redirect()->route('tampilmateri', ['kelas_slug' => $kelas_slug, 'materi_slug' => $materi_slug]);
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
