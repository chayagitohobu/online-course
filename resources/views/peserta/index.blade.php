@extends('layouts.user-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('inc.dashboard-nav')
            <div class="col-xl-10 bg-light">
                <div style="height:20vh"></div>
                <div class="row">
                    @if (empty($pesertas))
                        <div class="static-slider3">
                            <div class="container">
                                <div style="height:15vh"></div>
                                <!-- Row  -->
                                <div class="row justify-content-center ">
                                    <!-- Column -->
                                    <div class="col-md-8 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
                                        <h1 class="title">KELAS<b class="font-bold">BELUM</b> TERSEDIA<span class="text-success-gradiant font-bold typewrite"></span>
                                        </h1>
                                    </div>
                                    <!-- Column -->
                                </div>
                            </div>
                        </div> 
                    @else
                        @foreach ($pesertas as $peserta)
                        <div class="col-xl-4">
                            <div style="height:15vh"></div>
                            <div class="card p-4" data-aos="flip-left" data-aos-duration="1200">
                                <div style="height:35vh; overflow: hidden;">
                                <a href="/peserta/{{$peserta->id}}"><img class="card-img-top" src="{{ URL::asset('storage/kelas') }}/{{ $peserta->foto }}" alt="wrappixel kit"></a>
                                </div>
                                <h5 class="font-medium m-t-30">{{ $peserta->nama_kelas}}</h5>
                                <h6 class="m-t-20">
                                    <div class="row">
                                        <div class="col-md-5">
                                            RP. {{ $peserta->harga}}
                                        </div>
                                        <div class="col-md-7">
                                           {{ $peserta->jenjang}} / {{ $peserta->tingkat}}
                                        </div>
                                    </div>
                                </h6>
                                <a data-toggle="collapse" href="#" class="linking text-themecolor m-t-10">Lihat Kelas <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection