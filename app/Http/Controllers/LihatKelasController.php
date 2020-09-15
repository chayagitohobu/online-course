<?php

namespace App\Http\Controllers;

use App\Kategori;
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
        // $kelases = Kelas::All();
        $kelases = Kelas::paginate(6);
        $kategoris = Kategori::All();
        // $user_id = auth()->user()->id;
        // $pesertas = DB::table('kelas')
        //     ->join('peserta', 'kelas.id', 'peserta.kelas_id')
        //     ->where('pesertas.user_id', '=', $user_id)
        //     ->get();

        // echo "<pre>";
        // print_r($pesertas);
        return view('kelas.kelas')->with('kelases', $kelases)->with('kategoris', $kategoris);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $kategoris = Kategori::All();

        if ($search != '' || $search != null) {
            $kelases = Kelas::where('nama_kelas', 'like', '%' . $search . '%')
                ->paginate(5)
                ->setpath('');
        } else {
            $kelases = Kelas::paginate(6);
        }
        return view('kelas.kelas')->with('kelases', $kelases)->with('kategoris', $kategoris)->withInput($request->flash());
    }

    public function kategori($kategori_id)
    {
        // return 'test';

        $kategoris = Kategori::All();

        if ($kategori_id != '' || $kategori_id != 0 || $kategori_id != null) {
            $kelases = Kelas::where('kategori_id', $kategori_id)->paginate(5);
        } else {
            $kelases = Kelas::paginate(6);
        }
        return view('kelas.kelas')->with('kelases', $kelases)->with('kategoris', $kategoris);
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
    public function show($slug)
    {
        // $kelas = Kelas::find($id);
        $kelas = Kelas::where('slug', $slug)->first();
        $kelas_id = $kelas['id'];

        $kategori = Kategori::where('id', $kelas->kategori_id)->first();

        $materis = Materi::where('kelas_id', $kelas_id)->get();
        $materi_pertama = Materi::where('kelas_id', $kelas_id)->first();
        $user = User::where('id', $kelas['user_id'])->first(); // User yang membuat kelas
        $user_id = auth()->user();

        if (empty($user_id)) {
            return view('kelas.kelas_info')->with('kelas', $kelas)->with('materis', $materis)->with('user', $user);
        } else {
            $user_id = auth()->user()->id;

            $check_user_adalah_peserta = DB::table('pesertas')
                ->where('user_id', '=', $user_id)
                ->where('kelas_id', '=', $kelas_id)
                ->count();

            if ($check_user_adalah_peserta > 0) {

                $masuk = DB::table('pesertas')
                    ->where('user_id', '=', $user_id)
                    ->where('kelas_id', '=', $kelas_id)
                    ->get();
                return redirect('lihatmateri/' . $slug . '/' . $materi_pertama['slug']);
            } else {
                return view('kelas.kelas_info')->with('kelas', $kelas)->with('materis', $materis)->with('user', $user)->with('kategori',  $kategori);
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
