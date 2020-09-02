@extends('layouts.user-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('inc.dashboard-nav')
            <div class="col-xl-10 bg-light">
                <div style="height:20vh"></div>
                <div class="row">
                    @if (empty($pesetas))
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
                        @foreach ($kelases as $kelas)
                            <div class="col-md-4">
                                <div class="card" data-aos="flip-left" data-aos-duration="1200">
                                    <a href="lihatkelas/{{$kelas->id}}"><img class="card-img-top" src="{{ URL::asset('storage/images/kelas') }}/{{ $kelas->foto }}" alt="wrappixel kit"></a>
                                    <div class="date-pos bg-success-gradiant">RP.<span>{{$kelas->harga}}</span></div>
                                    <h5 class="font-medium m-t-30">{{$kelas->nama_kelas}}</h5>
                                    <h6 class="m-t-20">
                                        <div class="row">
                                            <div class="col-md-5">
                                                RP. {{ $kelas->harga}}
                                            </div>
                                            <div class="col-md-7">
                                            {{ $kelas->jenjang}} / {{ $kelas->tingkat}}
                                            {{-- {{ $kelas->jenjang}} / {{ $kelas->level}} --}}
                                            </div>
                                        </div>
                                    </h6>    
                                    <a data-toggle="collapse" href="lihatkelas/{{$kelas->id}}" class="linking text-themecolor m-t-10">Learn More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection