@extends('layouts.user-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('inc.dashboard-nav')
            <div class="col-xl-10 bg-light">
                <div style="height:20vh"></div>
                <div class="row">
                    <div style="height:20vh"></div>
                    <div class="col-xl-4">
                        <div style="height:15vh"></div>
                        <div class="card p-4" data-aos="flip-left" data-aos-duration="1200">
                            <a href="{{route('tampilmateri',['kelas_id' => $peserta->kelas_id, 'materi_id' => 1])}}"><img class="card-img-top" src="{{ URL::asset('storage/kelas') }}/{{ $peserta->foto }}" alt="wrappixel kit"></a>
                            <h5 class="font-medium m-t-30">{{ $peserta->nama_kelas}}</h5>
                            <h6 class="m-t-20">
                                <div class="row">
                                    <div class="col-md-5">
                                        RP. {{ $peserta->harga}}
                                    </div>
                                    <div class="col-md-7">
                                       {{ $peserta->jenjang}} / {{ $peserta->tingkat}}
                                       {{-- {{ $peserta->jenjang}} / {{ $peserta->level}} --}}
                                    </div>
                                </div>
                            </h6>
                            <a class="btn btn-success-gradiant btn-arrow m-t-20 pr-5 pl-5" href="{{route('tampilmateri',['kelas_id' => $peserta->kelas_id, 'materi_id' => 1])}}"><span> MASUK KELAS <i class="ti-arrow-right"></i></span></a>
                            {{-- <a data-toggle="collapse" href="{{route('tampilmateri',['kelas_id' => $peserta->kelas_id, 'materi_id' => 1])}}" class="linking text-themecolor m-t-10">MASUK KELAS <i class="ti-arrow-right"></i></a> --}}
                        </div>
                    </div>
                   
                    <div class="col-xl-8 p-5">
                        <form class="row pr-5">
                            @include('inc.messages')
                            @if (empty($peserta->testimoni) || empty($peserta->rating))
                                <!-- Column -->
                                <div style="height:50vh"></div>
                                <div class="col-md-12 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
                                    <h4 class="title">Kamu belum memberikan <br> <b class="font-bold">Rating dan Testimoni</b> kamu terhadap kelas ini <span class="text-success-gradiant font-bold typewrite"></span>
                                    </h4>
                                    <a class="btn btn-info-gradiant btn-arrow m-t-20 pr-5 pl-5" href="/peserta/{{$peserta->id}}/edit"><span> BERI RATING DAN TESTIMONI <i class="ti-arrow-right"></i></span></a>
                                </div>
                                <!-- Column -->
                            @else
                                <h3 class="title font-bold col-lg-12 mt-5"> FEEDBACK ANDA <hr></h3>
                                <br><br><br>
                                <div class="form-group col-lg-4">
                                    <label for="RATING">RATING</label>
                                    <input type="text" value="{{ $peserta->rating}}" name="RATING" readonly class="form-control" id="RATING">
                                </div>
                                <div class="form-group col-lg-12 mt-5">
                                    <label for="TINGKAT">TESTIMONI</label>
                                    <h6 class="p-2">{{ $peserta->testimoni}}</h6>
                                    <a class="btn btn-info-gradiant btn-arrow m-t-20 pr-5 pl-5" href="/peserta/{{$peserta->id}}/edit"><span> EDIT RATING DAN TESTIMONI <i class="ti-arrow-right"></i></span></a>
                                </div> 
                            @endif
                        </form>
                    </div>
                </div>

                <div class="row p-5">
                    <div class="col-xl-12 text-left">
                        <div class="row">
                            <div class="col-xl-8">
                                <h2 class="title">Tentang kelas</h2>
                                <hr>
                                <br>
                                <h6 class="subtitle" style="font-size: medium">
                                    {!! $kelas->deskripsi !!}</h6>
                                <br>
                            </div>
                            <div class="col-xl-4">
                                <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                                    <a  class="img-ho"><img class="card-img-top" src="{{ URL::asset('storage/user') }}/{{$kelas->foto}}" alt="wrappixel kit" /></a>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-8"><h5 class="font-medium m-b-0 d-inline">{{$kelas->name}} &nbsp; &nbsp;</h5></div>
                                            <hr>
                                        </div>
                                        <p class="m-b-0 font-14 ">{{$kelas->pekerjaan}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection