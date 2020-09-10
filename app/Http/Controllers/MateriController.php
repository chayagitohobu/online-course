<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Materi;
use App\User;
use App\Kelas;

class MateriController extends Controller
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
        $kelas = Kelas::where('user_id', $user_id)->first();
        $materis = Materi::where('kelas_id', $kelas['id'])->orderBy('urutan', 'asc')->get();

        return view('materi.index')->with('kelas', $kelas)->with('materis', $materis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materi.buat_materi');
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
            'urutan' => 'required',
            'judul' => 'required',
            'foto' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();

            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            $path = $request->file('foto')->storeAs('public/materi', $fileNameToStore);
        } else {
            $fileNameToStore = 'default.png';
        }
        $user_id = auth()->user()->id;
        $kelas = Kelas::where('user_id', $user_id)->first();

        $materi = new Materi;
        $materi->user_id = $user_id;
        $materi->kelas_id = $kelas['id'];
        $materi->judul = $request->input('judul');
        $materi->deskripsi = $request->input('deskripsi');
        $materi->video = $request->input('video');
        $materi->file = $request->input('file');
        $materi->urutan = $request->input('urutan');
        $materi->foto = $fileNameToStore;
        $materi->slug = SlugService::createSlug(Materi::class, 'slug', $request->input('judul'));
        $materi->save();
        return redirect('/materi')->with('success', 'materi telah di buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materi = Materi::find($id);
        return view('materi.materi')->with('materi', $materi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materi = Materi::find($id);
        return view('materi.edit_materi')->with('materi', $materi);
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
            'urutan' => 'required',
            'judul' => 'required',
            'foto' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();

            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            $path = $request->file('foto')->storeAs('public/materi', $fileNameToStore);
        } else {
            $fileNameToStore = 'default.png';
        }

        $materi = Materi::find($id);
        $materi->judul = $request->input('judul');
        $materi->deskripsi = $request->input('deskripsi');
        $materi->video = $request->input('video');
        $materi->file = $request->input('file');
        $materi->urutan = $request->input('urutan');
        $materi->foto = $fileNameToStore;
        $materi->slug = SlugService::createSlug(Materi::class, 'slug', $request->input('judul'));
        $materi->save();
        return redirect('/materi')->with('success', 'materi telah di edit');
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
