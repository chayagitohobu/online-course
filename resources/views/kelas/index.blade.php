@extends('layouts.user-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('inc.dashboard-nav')
            <div class="col-xl-10 bg-light">
                <div style="height:20vh"></div>
                <div class="row">
                    <div style="height:20vh"></div>
                    @if (count($kelas)>0)
                        @foreach ($kelas as $kelasitem)
                        <div class="col-xl-4">
                            <div style="height:15vh"></div>
                            <div class="card p-4" data-aos="flip-left" data-aos-duration="1200">
                                <a href="/kelas-info"><img class="card-img-top" src="images/blog/blog-home/img3.jpg" alt="wrappixel kit"></a>
                                <h5 class="font-medium m-t-30">{{ $kelasitem->nama_kelas}}</h5>
                                <h6 class="m-t-20">
                                    <div class="row">
                                        <div class="col-md-5">
                                            RP. {{ $kelasitem->harga}}
                                        </div>
                                        <div class="col-md-7">
                                           {{ $kelasitem->jenjang}} / {{ $kelasitem->tingkat}}
                                           {{-- {{ $kelasitem->jenjang}} / {{ $kelasitem->level}} --}}
                                        </div>
                                    </div>
                                </h6>
                                <a data-toggle="collapse" href="#" class="linking text-themecolor m-t-10">Lihat Kelas <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-8 p-5">
                            <form class="row pr-5">
                                <h3 class="title font-bold col-lg-12 mt-5" style="text-transform: uppercase">{{ $kelasitem->nama_kelas}} <hr></h3>
                                <hr>
                                <h6 class="m-t-20 p-2">
                                    {{ $kelasitem->deskripsi}}
                                </h6>
                                <h3 class="title font-bold col-lg-12 mt-5">INFORMASI KELAS <hr></h3>
                                <br><br><br>
                                <div class="form-group col-lg-4">
                                    <label for="JENJANG">JENJANG</label>
                                    <input type="text" value="{{ $kelasitem->jenjang}}" name="JENJANG" readonly class="form-control" id="JENJANG">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="TINGKAT">TINGKAT</label>
                                    <input type="text" value="{{ $kelasitem->tingkat}}" name="TINGKAT" readonly class="form-control" id="TINGKAT">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="LEVEL">LEVEL</label>
                                    <input type="text" value="{{ $kelasitem->level}}" name="LEVEL" readonly class="form-control" id="LEVEL">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="harga">HARGA</label>
                                    <input type="text" value="RP. {{ $kelasitem->harga}}" name="" readonly class="form-control" id="harga">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="Diskon">DISKON</label>
                                    <input type="text" value="{{ $kelasitem->diskon}} %" name="Diskon" readonly class="form-control" id="Diskon">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="DURASI">DURASI</label>
                                    <input type="text" value="{{ $kelasitem->durasi}} JAM" name="" readonly class="form-control" id="DURASI">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="KAPASITAS">KAPASITAS</label>
                                    <input type="text" value="{{ $kelasitem->kapasitas}} ORANG" name="KAPASITAS" readonly class="form-control" id="KAPASITAS">
                                </div>

                                <div class="form-group col-lg-12 text-center p-4">
                                    <a href="kelas/{{ $kelasitem->id}}/edit" class="btn btn-success"> EDIT KELAS SAYA </a>
                                </div>
                            </form>
                        </div>
                    
                        @endforeach
                    @else
                        <h5>Anda belum membuat kelas</h5>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection