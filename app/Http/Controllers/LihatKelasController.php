<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kelas;
use App\Materi;
use App\User;
use App\Peserta;


class LihatKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelases = Kelas::All();
        // $user_id = auth()->user()->id;
        // $pesertas = DB::table('kelas')
        //     ->join('peserta', 'kelas.id', 'peserta.kelas_id')
        //     ->where('pesertas.user_id', '=', $user_id)
        //     ->get();

        // echo "<pre>";
        // print_r($pesertas);
        return view('kelas.kelas')->with('kelases', $kelases);
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
        $peserta = new Peserta;
        $peserta->user_id = auth()->user()->id;
        $peserta->kelas_id = $request->input('kelas_id');
        $peserta->save();
        return redirect('/peserta')->with('success', 'Anda telah mengambil kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelas = Kelas::find($id);
        $materis = Materi::where('kelas_id', $id)->get();
        $user = User::where('id', $kelas['user_id'])->first(); // User yang membuat kelas
        $user_id = auth()->user();

        if (empty($user_id)) {

            return view('kelas.kelas_info')->with('kelas', $kelas)->with('materis', $materis)->with('user', $user);
        } else {
            $user_id = auth()->user()->id;

            $check_user_adalah_peserta = DB::table('pesertas')
                ->where('user_id', '=', $user_id)
                ->where('kelas_id', '=', $id)
                ->count();

            if ($check_user_adalah_peserta > 0) {

                $masuk = DB::table('pesertas')
                    ->where('user_id', '=', $user_id)
                    ->where('kelas_id', '=', $id)
                    ->get();
                return redirect('lihatmateri/' . $id . '/1');
            } else {
                return view('kelas.kelas_info')->with('kelas', $kelas)->with('materis', $materis)->with('user', $user);
            }
        }



        // return $masuk;

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
