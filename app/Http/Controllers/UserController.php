<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Support\Facades\DB;

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
        $user_id = auth()->user()->id;
        $user = DB::table('users')
            ->where('users.id', '=', $user_id)
            ->get();

        $province_id = DB::table('users')
            ->where('users.id', '=', $user_id)
            ->pluck('province_id')->first();

        $regency_id = DB::table('users')
            ->where('users.id', '=', $user_id)
            ->pluck('regency_id')->first();

        $district_id = DB::table('users')
            ->where('users.id', '=', $user_id)
            ->pluck('district_id')->first();

        $village_id = DB::table('users')
            ->where('users.id', '=', $user_id)
            ->pluck('village_id')->first();

        $province = Province::where('indoregion_provinces.id', '=', $province_id)->first();
        $regency = Regency::where('indoregion_regencies.id', '=', $regency_id)->first();
        $district = District::where('indoregion_districts.id', '=', $district_id)->first();
        $village = Village::where('indoregion_villages.id', '=', $village_id)->first();

        // return $province;
        return view('user.user')
            ->with('province', $province)
            ->with('regency', $regency)
            ->with('district', $district)
            ->with('village', $village);
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
        $provinces = Province::all();
        $user = User::find($id);
        return view('user.user-edit')->with('user', $user)->with('provinces', $provinces);
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

            $path = $request->file('foto')->storeAs('public/user', $fileNameToStore);
        } else {
            $fileNameToStore = 'default_user.png';
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

        $user->province_id = $request->input('provinsi');
        $user->regency_id = $request->input('kota_kabupaten');
        $user->district_id = $request->input('kecamatan');
        $user->village_id = $request->input('kelurahan');

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

    public function getKota_Kabupaten($id)
    {
        // $regencies = $province->regencies;
        $kota_kabupaten = Regency::where('province_id', $id)->pluck("name", "id");
        return json_encode($kota_kabupaten);
    }

    public function getKecamatan($id)
    {
        // $regencies = $province->regencies;
        $kecamatan = District::where('regency_id', $id)->pluck("name", "id");
        return json_encode($kecamatan);
    }

    public function getKelurahan($id)
    {
        // $regencies = $province->regencies;
        $kelurahan = Village::where('district_id', $id)->pluck("name", "id");
        return json_encode($kelurahan);
    }
}
