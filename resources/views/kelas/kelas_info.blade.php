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

        <!-- Static Slider 3  -->
        <!-- ============================================================== -->
        <div class="static-slider3 bg-light">
            <div class="container">
                <!-- Row  -->
                <div class="row justify-content-center">
                    <!-- Column -->
                    <div class="col-xl-5 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
                        <h1 class="title">Menjadi peserta <br> kelas ini dengan harga<br><b class="font-bold d-inline-block p-1"> RP. {{$kelas->harga}} </b><span class="text-success-gradiant font-bold typewrite" data-period="2000" data-type='[ "Photoshop", "Web Application", "Web Designing", "Web Development" ]'></span></h1>
                        {!! Form::open(['action'=>'LihatKelasController@store', 'method' => 'POST']) !!}
                            <input type="hidden" value="{{$user->id}}" name="user_id">
                            <input type="hidden" value="{{$kelas->id}}" name="kelas_id">
                            <button type="submit" class="btn btn-success"> GABUNG KELAS </button>
                            {{-- <a type="submit" class="btn btn-success-gradiant btn-md btn-arrow m-t-20 text-white"><span>Ikuti kelas <i class="ti-arrow-right"></i></span></a> --}}
                        {!! Form::close() !!}
                    </div>
                    <!-- Column -->

                    <!-- Column -->
                    <div class="col-xl-7 align-self-center ml-auto" data-aos="fade-left" data-aos-duration="1500">
                        {{-- <img src="images/static-slider/slider10/img5.jpg" alt="We are Digital Agency" class="img-fluid" /> --}}
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            {{-- <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$kelas->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$kelas->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                            <a type="button" class="disabled text-left btn btn-block waves-effect waves-light btn-outline-secondary"> <i class="ti-lock"></i> | &nbsp;&nbsp;{{$materi->judul}}</a>
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
        </div>
        <!-- ============================================================== -->
        <!-- End Testimonial 3  -->
@endsection