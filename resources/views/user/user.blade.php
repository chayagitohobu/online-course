@extends('layouts.user-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('inc.dashboard-nav')
            <div class="col-xl-10 bg-light">
                <div style="height:20vh"></div>

                <div class="row">
                    <div class="col-xl-3 mt-5 p-3">
                        <div class="card p-1 card-shadow" data-aos="flip-left" data-aos-duration="1200">
                            <a href="#" class="img-ho"><img class="card-img-top" src="{{ URL::asset('storage/images/user') }}/{{ Auth::user()->foto }}" alt="Tambahkan foto profile" /></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 text-center"><h5 class="font-medium m-b-0 d-inline">{{ Auth::user()->name }}</h5></div>
                                    <br><br>
                                </div>
                                <p class="m-b-0 font-14 ">{{ Auth::user()->deskripsi_diri }}</p>
                                <hr>
                                <div class="row text-center">
                                    <div class="col-md-6">
                                        <span class="label label-light-inverse">GURU</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="label label-success">MURID</span>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <div class="round-social light text-center" style="transform: scale(0.8)">
                                        <a href="//www.facebook.com/{{Auth::user()->facebook}}"><i class="fa fa-facebook"></i></a>
                                        <a href="//www.twitter.com/{{Auth::user()->twitter}}"><i class="fa fa-twitter"></i></a>
                                        <a href="//www.linkedin.com/{{Auth::user()->linkedin}}"><i class="fa fa-linkedin"></i></a>
                                        <a href="//www.youtube.com/{{Auth::user()->youtube}}"><i class="fa fa-youtube-play"></i></a>
                                        <a href="//www.instagram.com/{{Auth::user()->instagram}}"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 p-5">
                        <form class="row pr-5">
                            @include('inc.messages')
                            <br>
                            <h3 class="title font-bold col-lg-12 mt-5">KONTAK <hr></h3>
                            <br><br><br>
                            <div class="form-group col-lg-6">
                                <label for="Nomor Handphone">NOMOR HANDPHONE</label>
                                <input type="text" readonly value="{{Auth::user()->nomor_hp}}" name="nomor_hp" class="form-control" id="Nomor Handphone">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="Alamat">ALAMAT</label>
                                <input type="text" readonly value="{{Auth::user()->alamat}}" name="alamat" class="form-control" id="Alamat">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="provinsi">Provinsi</label>
                                <input type="text" readonly class="form-control" id="provinsi" placeholder="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="kota/kabupaten">Kota/Kabupaten</label>
                                <input type="text" readonly class="form-control" id="kota/kabupaten" placeholder="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" readonly class="form-control" id="kecamatan" placeholder="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="Kelurahan">Kelurahan</label>
                                <input type="text" readonly class="form-control" id="Kelurahan" placeholder="">
                            </div>
                            <br>
                            <h3 class="title font-bold col-lg-12 mt-5">INFORMASI DIRI <hr></h3>
                            <br><br><br>
                            <div class="form-group col-lg-6">
                                <label for="pendidikan-terakhir">PENDIDIKAN TERAKHIR</label>
                                <input type="text" value="{{Auth::user()->pendidikan_terakhir}}" name="pendidikan_terakhir" readonly class="form-control" id="pendidikan-terakhir">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="pekerjaan">PEKERJAAN</label>
                                <input type="text" value="{{Auth::user()->pekerjaan}}" name="pekerjaan" readonly class="form-control" id="pekerjaan">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="tanggal-lahir">TANGGAL LAHIR</label>
                                <input type="date" value="{{Auth::user()->tanggal_lahir}}" name="tanggal_lahir" readonly class="form-control" id="tanggal-lahir">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="tempat-lahir">TEMPAT LAHIR</label>
                                <input type="text" value="{{Auth::user()->tempat_lahir}}" name="tempat_lahir" readonly class="form-control" id="tempat-lahir">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="nik">NIK</label>
                                <input type="text" value="{{Auth::user()->nik}}" name="nik" readonly class="form-control" id="nik">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="npwp">NPWP</label>
                                <input type="text" value="{{Auth::user()->npwp}}" name="npwp" readonly class="form-control" id="npwp">
                            </div>
                            <div class="form-group col-lg-5">
                                <label for="jenis-kelamin">JENIS KELAMIN</label>
                                <input type="text" value="{{Auth::user()->jk}}" name="jk" readonly class="form-control" id="jenis-kelamin">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="kode-promosi">KODE PROMOSI</label>
                                <input type="text" value="{{Auth::user()->kode_promosi}}" name="kode_promosi" readonly class="form-control" id="kode-promosi">
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="kode-affilasi">KODE AFFILASI</label>
                                <input type="text" value="{{Auth::user()->kode_affilasi}}" name="kode_affilasi" readonly class="form-control" id="kode-affilasi">
                            </div>
                            <div class="form-group col-lg-12 text-center p-4">
                                <a href="user/{{ Auth::user()->id }}/edit" class="btn btn-success"> TAMBAH / EDIT PROFILE SAYA </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
@endsection


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}