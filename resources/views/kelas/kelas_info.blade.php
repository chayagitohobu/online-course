@extends('layouts.master')


@section('content')

    @section('jumbo-title')
    <br><br>
    <h5 class="title mt-5" style="transform: scale(0.8)">{{$kelas->nama_kelas}}</h5>
    @endsection 

    @section('jumbo-content')
    
    <!-- Testimonial 3  -->
        <!-- ============================================================== -->
        <div class="testimonial3">
            <div class="container">
                <!-- Row  -->
                <div class="row m-t-40 justify-content-center">
                    <!-- item -->
                    <div class="col-xl-3" data-aos="fade-right">
                        <div class="">
                            <div class="card-body">
                                <div class="align-items-center">
                                    <div>
                                        <h6 class="m-b-0 customer text-center" style="color: #ffff">PESERTA</h6>
                                        <br>
                                        <h6 class="m-b-0 customer text-center" style="color: #ffff"><b>-</b></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- item -->
                    <div class="col-xl-3" data-aos="fade-right">
                        <div class="">
                            <div class="card-body">
                                <div class="align-items-center">
                                    <div>
                                        <h6 class="m-b-0 customer text-center" style="color: #ffff">JENJANG</h6>
                                        <br>
                                        <h6 class="m-b-0 customer text-center" style="color: #ffff"><b>{{$kelas->jenjang}}</b></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- item -->
                    <div class="col-xl-3" data-aos="fade-right">
                        <div class="">
                            <div class="card-body">
                                <div class="align-items-center">
                                    <div>
                                        <h6 class="m-b-0 customer text-center" style="color: #ffff">KELAS</h6>
                                        <br>
                                        @if ($kelas->jenjang == 'UMUM')
                                            <h6 class="m-b-0 customer text-center" style="color: #ffff"><b>{{$kelas->level}}</b></h6>
                                        @else
                                            <h6 class="m-b-0 customer text-center" style="color: #ffff"><b>{{$kelas->tingkat}}</b></h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Testimonial 3  -->
    @endsection

        <!-- Static Slider 3  -->
        <!-- ============================================================== -->
        <div class="static-slider3 bg-light">
            <div class="container">
                <!-- Row  -->
                <div class="row justify-content-center">
                    <!-- Column -->
                    <div class="col-xl-5 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
                        @if ($kelas->harga <= 0 || null)
                            
                            <h1 class="title">Menjadi peserta <br> kelas ini secara <br>
                                <b class="font-bold d-inline-block p-1"> GRATIS </b>
                            <span class="text-success-gradiant font-bold typewrite"></span></h1>
                        @else
                            <h1 class="title">Menjadi peserta <br> kelas ini dengan harga<br>
                            <b class="font-bold d-inline-block p-1"> RP. {{$kelas->harga}} </b>
                            <span class="text-success-gradiant font-bold typewrite"></span></h1>
                        @endif
                        
                        
                        
                        @guest
                        <a href="{{ route('login') }}"><button class="btn btn-success"> GABUNG KELAS </button></a>
                        @else
                            @if ($kelas->harga == 0 || $kelas->harga == null)
                                {!! Form::open(['action'=>'LihatKelasController@store', 'method' => 'POST']) !!}
                                    <input type="hidden" value="{{$kelas->id}}" name="kelas_id">
                                    <button type="submit" class="btn btn-success"> GABUNG KELAS </button>
                                    {{-- <a type="submit" class="btn btn-success-gradiant btn-md btn-arrow m-t-20 text-white"><span>Ikuti kelas <i class="ti-arrow-right"></i></span></a> --}}
                                {!! Form::close() !!}
                            @else
                                <a href="{{route('checkout',['kelas_slug' => $kelas->slug])}}">
                                    <button type="submit" class="btn btn-success"> GABUNG KELAS </button>
                                </a>
                            @endif
                        @endguest
                        
                    </div>
                    <!-- Column -->

                    <!-- Column -->
                    <div class="col-xl-7 align-self-center ml-auto" data-aos="fade-left" data-aos-duration="1500">
                        {{-- <img src="images/static-slider/slider10/img5.jpg" alt="We are Digital Agency" class="img-fluid" /> --}}
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            {{-- <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$kelas->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                            <iframe id="youtube" width="853" height="480" src="https://www.youtube.com/embed/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Static Slider 3  -->

        <!-- text  -->
        <!-- ============================================================== -->
        <div class="spacer team2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <!-- Feature 2  -->
                        <!-- ============================================================== -->
                        <div class="feature20 up">
                            <div class="container">
                                <!-- Row  -->
                                <div class="row p-5 ">
                                    <div class="col-xl-12 text-left">
                                        <div class="row">
                                            <div class="col-xl-8">
                                                <span class="label label-success label-rounded">TAGS</span>
                                                @for ($i = 0; $i < 3; $i++)
                                                <p class=" d-inline subtitle">Programming /</p>
                                                @endfor
                                                <hr>
                                                <br>
                                                <h2 class="title">Tentang kelas</h2>
                                                <br>
                                                @if (empty($kategori))
                                                    <h6 class="subtitle" style="font-size: medium"></h6>
                                                @else
                                                    <h6 class="subtitle" style="font-size: medium">
                                                        Kategori : {!! $kategori->kategori !!}</h6>
                                                    <br>
                                                @endif

                                                <h6 class="subtitle" style="font-size: medium">
                                                    {!! $kelas->deskripsi !!}</h6>
                                                <br>
                                            </div>
                                        </div>
                                        <h2 class="title">Gabung dan Pelajari</h2>
                                        <br>
                                        <h6 class="subtitle" style="font-size: medium">Materi kelas yang akan kita pelajari bersama</h6>
                                        <br>
                                        @foreach ($materis as $materi)
                                            
                                            <a href="/materi/{{ $materi->id }}" data-toggle="tooltip" data-placement="top" title="{{ $materi->judul }}" type="button" class="disabled text-left btn btn-block waves-effect waves-light btn-outline-secondary"> 
                                                <div class="row" style="font-size: 0.9em">
                                                    <div class="col-sm-1 text-center">
                                                        <i class="ti-lock"></i> |
                                                    </div>
                                                    <div class="col-sm-8 text-left">
                                                        {{-- {{ $materi->judul }} --}}
                                                        {{ Str::limit($materi->judul, 40) }}
                                                    </div>
                                                    <div class="col-sm-1 text-left">
                                                        |  {{ $materi->durasi }}
                                                    </div>
                                                </div>
                                            </a>

                                        @endforeach
                                            <a type="button" class="text-center btn btn-block waves-effect waves-light btn btn-success-gradiant text-white"> <i class="ti-arrow-down"></i></a>                     
                                        
                                     </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Feature 2  -->

                    </div>
                    <!-- Column -->
                    <div class="col-md-4 mt-5">
                        <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                            <a  class="img-ho"><img class="card-img-top" src="{{ URL::asset('storage/user') }}/{{$user->foto}}" alt="wrappixel kit" /></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8"><h5 class="font-medium m-b-0 d-inline">{{$user->name}} &nbsp; &nbsp;</h5></div>
                                    <br><br>
                                    <div class="col-xl-4"><span class="label label-inverse">Mentor</span></div>
                                </div>
                                <p class="m-b-0 font-14 ">{{$user->pekerjaan}}</p>
                            </div>
                            <div class="round-social light text-center mb-5" style="transform: scale(0.8)">
                                @if (empty(Auth::user()->facebook))
                                    
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                @else
                                    <a href="{{Auth::user()->facebook}}"><i class="fa fa-facebook"></i></a>
                                
                                @endif
                                @if (empty(Auth::user()->twitter))
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                
                                @else
                                 <a href="{{Auth::user()->twitter}}"><i class="fa fa-twitter"></i></a>
                                    
                                @endif
                                @if (empty(Auth::user()->linkedin))
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                
                                @else
                                    <a href="{{Auth::user()->linkedin}}"><i class="fa fa-linkedin"></i></a>
                                    
                                @endif
                                @if (empty(Auth::user()->youtube))
                                    <a href=""><i class="fa fa-youtube-play"></i></a>
                                
                                @else
                                    <a href="{{Auth::user()->youtube}}"><i class="fa fa-youtube-play"></i></a>
                                    
                                @endif
                                @if (empty(Auth::user()->instagram))
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                @else
                                    <a href="{{Auth::user()->instagram}}"><i class="fa fa-instagram"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>        
            </div> 
        </div>
        <!-- ============================================================== -->
        <!-- End text  -->


        <!-- Testimonial 3  -->
        <!-- ============================================================== -->
        <div class="testimonial3 spacer bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title"> Testimonial</h2>
                        <h6 class="subtitle">Apa kata murid yang telah mengambil course ini ?</h6>
                    </div>
                </div>
                <!-- Row  -->
                <div class="row testi3 m-t-40">
                    @if ($testimonis == '')
                        <div class="col-lg-4 col-md-4" data-aos="fade-right">
                            <div class="card card-shadow">
                               
                            </div>
                        </div>
                    @else
                        @foreach ($testimonis as $testimoni)
                            <!-- item -->
                            @if ($testimoni->testimoni != '')
                                <div class="col-lg-4 col-md-4" data-aos="fade-right">
                                    <div class="card card-shadow">
                                        <div class="card-body">
                                            <h6 class="font-light m-b-30" style="overflow: auto; height:30vh">“{{$testimoni->testimoni}}”</h6>
                                            <div class="d-flex no-block align-items-center">
                                                <span class="thumb-img"><img src="{{ URL::asset('storage/user') }}/{{$testimoni->foto}}" alt="wrapkit" class="circle"/></span>
                                                <div class="m-l-20">
                                                    <h6 class="m-b-0 customer">{{$testimoni->name}}</h6>
                                                    <div class="font-10">
                                                        @for ($i = 0; $i < $testimoni->rating; $i++)
                                                            <a class="text-success"><i class="fa fa-star"></i></a>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Testimonial 3  -->
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
