@extends('layouts.user-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('inc.dashboard-nav')
            <div class="col-xl-10 bg-light">
                <div style="height:20vh"></div>
                <div class="row pr-5">
                    <div class="col-xl-4">
                        <div style="height:15vh"></div>
                        <div class="card p-4" data-aos="flip-left" data-aos-duration="1200">
                            <div style="height:35vh; overflow: hidden;">
                            <a href="/kelas-info"><img class="card-img-top" src="{{ URL::asset('storage/kelas') }}/{{ $kelas->foto }}" alt="wrappixel kit"></a>
                            </div>
                            <h5 class="font-medium m-t-30">{{ $kelas->nama_kelas}}</h5>
                            <h6 class="m-t-20">
                                <div class="row">
                                    <div class="col-md-5">
                                        RP. {{ $kelas->harga}}
                                    </div>
                                    <div class="col-md-7">
                                        @if ($kelas->jenjang == 'UMUM')
                                        {{ $kelas->jenjang}} / {{ $kelas->level}}
                                        @else
                                        {{ $kelas->jenjang}} / {{ $kelas->tingkat}}
                                        @endif
                                    </div>
                                </div>
                            </h6>
                            <a data-toggle="collapse" href="#" class="linking text-themecolor m-t-10">Lihat Kelas <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-8 p-5">
                        
                        <h3 class="title font-bold col-lg-12 mt-5">MATERI KELAS <hr></h3>
                        <br>
                        <a type="button" href="/materi/create" class="text-center mt-2 mb-2 btn btn-block text-white btn-success-gradiant"> TAMBAH MATERI <i class="ti-arrow-down"></i></a>
                        
                        @foreach ($materis as $materi)
                            <a href="/materi/{{ $materi->id }}" type="button" class="text-left mt-2 mb-2 btn btn-block text-white btn-inverse"> 
                                <div class="row">
                                    <div class="col-xl-1 text-center">
                                        {{ $materi->urutan }}
                                    </div>
                                    <div class="col-xl-1">
                                        |
                                    </div>
                                    <div class="col-xl-10 text-left">
                                        {{ $materi->judul }}
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection