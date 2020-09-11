@extends('layouts.user-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('inc.dashboard-nav')
            <div class="col-xl-10 bg-light">
                <div style="height:20vh"></div>
                <div class="row">
                    <div style="height:20vh"></div>
                    @if (empty($kelas))
                        <div class="static-slider3">
                            <div class="container">
                                <div style="height:15vh"></div>
                                <!-- Row  -->
                                <div class="row justify-content-center ">
                                    <!-- Column -->
                                    <div class="col-md-8 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
                                        <h1 class="title">Hasilkan Rupiah dengan <b class="font-bold">Berbagi keahlian dan pengetahuan</b> kamu untuk masa depan Indonesia<span class="text-success-gradiant font-bold typewrite"></span>
                                        </h1>
                                        <a class="btn btn-success-gradiant btn-md btn-arrow m-t-20" href="/kelas/create"><span>BUAT KELAS<i class="ti-arrow-right"></i></span></a>
                                    </div>
                                    <!-- Column -->
                                </div>
                            </div>
                        </div> 
                    @else
                    <div class="col-xl-4">
                        <div style="height:15vh"></div>
                        <div class="card p-4" data-aos="flip-left" data-aos-duration="1200">
                            <div style="height:35vh; overflow: hidden;">
                            <a href="/lihatkelas/{{ $kelas->slug}}"><img class="card-img-top" src="{{ URL::asset('storage/kelas') }}/{{ $kelas->foto }}" alt="wrappixel kit"></a>
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
                                       
                                       {{-- {{ $kelas->jenjang}} / {{ $kelas->level}} --}}
                                    </div>
                                </div>
                            </h6>
                            <a data-toggle="collapse" href="/lihatkelas/{{ $kelas->id}}" class="linking text-themecolor m-t-10">Lihat Kelas <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-8 p-5">
                        <form class="row pr-5">
                            @include('inc.messages')
                            <h3 class="title font-bold col-lg-12 mt-5" style="text-transform: uppercase">{{ $kelas->nama_kelas}} <hr></h3>
                            <hr>
                            <h6 class="m-t-20 p-2">
                                {!! $kelas->deskripsi !!}
                            </h6>
                        </form>
                    </div>
                    <div class="container col-xl-12">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-10">
                                <h3 class="title font-bold col-lg-12 mt-5">VIDEO PREVIEW <hr></h3>
                                <br>
                                <div class="embed-responsive embed-responsive-16by9">
                                    {{-- <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$kelas->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                                    <iframe id="youtube" width="853" height="480" src="https://www.youtube.com/embed/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-xl-12 container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 p-5">
                                <div class="row">
                                    <div class="text-center col-lg-12 mt-5">
                                    <h3 class="title font-bold ">INFORMASI KELAS <hr></h3>
                                    <br><br>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="JENJANG">JENJANG</label>
                                    <input type="text" value="{{ $kelas->jenjang}}" name="JENJANG" readonly class="form-control" id="JENJANG">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="TINGKAT">TINGKAT</label>
                                    <input type="text" value="{{ $kelas->tingkat}}" name="TINGKAT" readonly class="form-control" id="TINGKAT">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="LEVEL">LEVEL</label>
                                    <input type="text" value="{{ $kelas->level}}" name="LEVEL" readonly class="form-control" id="LEVEL">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="harga">HARGA</label>
                                    <input type="text" value="RP. {{ $kelas->harga}}" name="" readonly class="form-control" id="harga">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="Diskon">DISKON</label>
                                    <input type="text" value="{{ $kelas->diskon}} %" name="Diskon" readonly class="form-control" id="Diskon">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="DURASI">DURASI</label>
                                    <input type="text" value="{{ $kelas->durasi}} JAM" name="" readonly class="form-control" id="DURASI">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="KAPASITAS">KAPASITAS</label>
                                    <input type="text" value="{{ $kelas->kapasitas}} ORANG" name="KAPASITAS" readonly class="form-control" id="KAPASITAS">
                                </div>
                                <div class="form-group col-lg-7 text-right p-4">
                                    <a href="materi" class="btn btn-success-gradiant pr-5 pl-5"> MATERI KELAS </a>
                                </div>
                                <div class="form-group col-lg-5 text-left p-4">
                                    <a href="kelas/{{ $kelas->id}}/edit" class="btn btn-info-gradiant"> EDIT KELAS</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{--  --}}
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

        // window.onload = function() {
        //     if (window.jQuery) {  
        //         // jQuery is loaded  
        //         alert("Yeah!");
        //     } else {
        //         // jQuery is not loaded
        //         alert("Doesn't Work");
        //     }
        // }

        jQuery(document).ready(function(){

            var input = {!! json_encode($kelas->video) !!};

            function getId(url) {
                const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
                const match = url.match(regExp);

                return (match && match[2].length === 11)
                ? match[2]
                : null;
            }

            
            const videoId = getId(input);
            // alert(videoId);

            $('#youtube').attr('src', "https://www.youtube.com/embed/"+ videoId);
        });

    </script>
@endsection