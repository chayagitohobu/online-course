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
                                        <h6 class="m-b-0 customer text-center" style="color: #ffff"><b>{{$kelas->tingkat}}</b></h6>
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
        
        <div class="col-xl-12 mt-5">
            <div class="row pr-5 justify-content-center mb-5">
                <div style="height:20vh"></div>
                <div class="col-xl-2 p-5 card card-shadow text-bold text-left mr-2" style="overflow-y: scroll;">
                    <h4 class="mb-5"> <b> DAFTAR MATERI </b> <hr></h4>
                    @foreach ($daftarmateri as $materi_item)
                    <a href="{{route('tampilmateri',['kelas_slug' => $kelas->slug, 'materi_slug' => $materi_item->slug])}}"><h6 style="font-size: smaller;">{{$materi_item->urutan}}) {{$materi_item->judul}} <hr></h6></a>
                    <hr>
                    @endforeach
                </div>
                <div class="col-xl-9 pr-5 pl-5 text-left bg-light p-5 text-center">
                    @foreach ($materis as $materi)
                    <div class="col-xl-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            {{-- <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$kelas->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                            <iframe id="youtube" width="853" height="480" src="https://www.youtube.com/embed/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <br><br>
                    <span class="label btn-success-gradiant label-rounded text-medium"> MATERI {{$materi->urutan}} </span>
                    <h3 class="title font-bold col-lg-12 mt-5" style="text-transform: uppercase">{{$materi->judul}}<hr></h3>
                    <div class="col-lg-12 mt-5 title text-left" style="color: black !important;">{!! $materi->deskripsi !!}</div>
                    <br><br>
                    <div class="text-left">
                        <a type="button" href="{{$materi->file}}" class="text-center btn btn btn-outline-success" style="font-size: small"> DOWNLOAD FILE PELAJARAN<i class="ti-arrow-down"></i></a><br><br><hr>
                    </div>
                    
                    <div style="height:15vh"></div>
                    
                    <div class="row justify-content-center">
                        <div class="col-xl-3">
                            <a type="button" href="{{route('tampilmateri',['kelas_slug' => $kelas->slug, 'materi_slug' => $materi_sebelumnya])}}" class="text-center btn text-white btn btn-success-gradiant"> <i class="ti-arrow-left"></i> SEBELUMNYA</a>
                        </div>
                        
                        <div class="col-xl-3">
                            <a href="{{route('addPaham',['kelas_slug' => $kelas->slug, 'materi_slug' => $materi->slug])}}">
                                @if ($paham == null || $paham == 'tidak')
                                <button type="button" id="paham" class="text-center btn text-white btn btn-danger-gradiant"> SAYA MENGERTI <i class="ti-face-sad"></i></button>
                                @else
                                <button type="button" id="paham" class="text-center btn text-white btn btn-info-gradiant"> SAYA MENGERTI <i class="ti-face-smile"></i></button>
                                @endif
                                
                            </a>
                        </div>
                        <div class="col-xl-3">
                            <a type="button" href="{{route('tampilmateri',['kelas_slug' => $kelas->slug, 'materi_slug' => $materi_selanjutnya])}}" class="text-center btn text-white btn btn-success-gradiant"> SELANJUTNYA <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


@endsection

@section('script')
   <script>

    //    $('#paham').click(function(){
    //        var paham = 'ya';
    //        var kelas_slug = {!! json_encode($kelas->slug) !!};
    //        var materi_slug = {!! json_encode($materi->slug) !!};
    //         if(paham){
    //             jQuery.ajax({
    //                 url: '/addPaham/'+kelas_slug+'/'+materi_slug+'/'+paham,
    //                 type: 'GET',
    //                 dataType: 'json',
    //                 success:function(data){
    //                     alert('sudah');
    //                 }
    //             })
    //         }
    //    })

        jQuery(document).ready(function(){
            

            // VIDEO START
            var input = {!! json_encode($materi->video) !!};

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

            // VIDEO END
        });
    </script> 
@endsection