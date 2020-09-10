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
                    <a href="{{route('tampilmateri',['kelas_id' => $materi_item->kelas_id, 'materi_id' => $materi_item->urutan])}}"><h6>{{$materi_item->urutan}} . {{$materi_item->judul}} <hr></h6></a>
                    <hr>
                    @endforeach
                </div>
                <div class="col-xl-9 pr-5 pl-5 text-left bg-light p-5 text-center">
                    @foreach ($materis as $materi)
                    <div class="col-xl-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$materi->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <br><br>
                    <span class="label btn-success-gradiant label-rounded text-medium"> MATERI {{$materi->urutan}} </span>
                    <h3 class="title font-bold col-lg-12 mt-5" style="text-transform: uppercase">{{$materi->judul}}<hr></h3>
                    <div class="col-lg-12 mt-5 title text-left">{!! $materi->deskripsi !!}</div>
                    <br><br>
                    <div class="text-left">
                        <a type="button" href="{{$materi->file}}" class="text-center btn btn btn-outline-success" style="font-size: small"> DOWNLOAD FILE PELAJARAN<i class="ti-arrow-down"></i></a><br><br><hr>
                    </div>
                    
                    <div style="height:15vh"></div>
                    
                    <div class="row justify-content-center">
                        @if ($materi->urutan != 1)
                            <div class="col-xl-3">
                                <a type="button" href="{{route('tampilmateri',['kelas_id' => $materi->kelas_id, 'materi_id' => $materi->urutan - 1])}}" class="text-center btn text-white btn btn-success-gradiant"> <i class="ti-arrow-left"></i> SEBELUMNYA</a>
                            </div>
                        @else
                        <div class="col-xl-3">
                            
                        </div>
                        @endif
                        
                        <div class="col-xl-3">
                            <a type="button" href="" class="text-center btn text-white btn btn-info-gradiant"> SAYA MENGERTI </a>
                        </div>
                        <div class="col-xl-3">
                            <a type="button" href="{{route('tampilmateri',['kelas_id' => $materi->kelas_id, 'materi_id' => $materi->urutan + 1])}}" class="text-center btn text-white btn btn-success-gradiant"> SELANJUTNYA <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    @endforeach

                    
                </div>
            </div>
            
            
        </div>


@endsection

@section('script')
    
@endsection