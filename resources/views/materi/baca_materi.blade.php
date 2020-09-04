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
                    <h6 class="col-lg-12 mt-5 title text-left">{!! $materi->deskripsi !!}<hr></h6>
                    <a type="button" href="{{$materi->file}}" class="text-center btn btn-block waves-effect waves-light btn btn-success-gradiant text-white"> DOWNLOAD FILE PELAJARAN <i class="ti-arrow-down"></i></a>
                    <div style="height:15vh"></div>
                    @endforeach
                </div>
            </div>
            
            
        </div>

        <!-- Testimonial 3  -->
        <!-- ============================================================== -->
        {{-- <div class="testimonial3 spacer bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title"> Testimonial</h2>
                        <h6 class="subtitle">Apa kata murid yang telah mengambil course ini ?</h6>
                    </div>
                </div>
                <!-- Row  -->
                <div class="row testi3 m-t-40">

                    @for ($i = 0; $i < 6; $i++)
                    <!-- item -->
                    <div class="col-lg-4 col-md-4" data-aos="fade-right">
                        <div class="card card-shadow">
                            <div class="card-body">
                                <h6 class="font-light m-b-30">“Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras venene veliel vestibulum.”</h6>
                                <div class="d-flex no-block align-items-center">
                                    <span class="thumb-img"><img src="images/testimonial/1.jpg" alt="wrapkit" class="circle"/></span>
                                    <div class="m-l-20">
                                        <h6 class="m-b-0 customer">Michelle Anderson</h6>
                                        <div class="font-10">
                                            <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                            <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                            <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                            <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                            <a href="" class="text-muted"><i class="fa fa-star"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div> --}}
        <!-- ============================================================== -->
        <!-- End Testimonial 3  -->
@endsection

@section('script')
    
@endsection