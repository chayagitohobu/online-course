@extends('layouts.master')

@section('content')

    @section('jumbo-title')
    
    <h1 class="title">KELAS</h1>
    @endsection 

    @section('jumbo-content')
    <h4 class="subtitle font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
        Iusto hic deleniti quod eos sint unde perferendis, ipsam error maiores.</h4>
    @endsection

    @section('jumbo-button')
        <a href="/kelas" class="btn btn-success-gradiant  m-r-20 btn-md m-t-30 font-14">GRATIS</a>
        <a href="/kelas" class="btn btn-md m-t-30 btn-success-gradiant active font-14">BERBAYAR</a>
    @endsection

    <!-- Blog home 2  -->
    <!-- ============================================================== -->
    <div class="blog-home2 spacer">
        <div class="container">
        <!-- Row  -->
            
        <!-- Header 1  -->
        <!-- ============================================================== -->
        <div class="header1 po-relative">
            <div class="container">
                <!-- Header 1 code -->
                <nav class="navbar navbar-expand-lg h1-nav">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header1" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>
               
                <div class="collapse navbar-collapse" id="header1">
                    
                    <div class="container">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="#">Software Development</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Website Development</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Android Development</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="h1-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Machine learning <i class="fa fa-angle-down m-l-5"></i>
                                </a>
                                <ul class="b-none dropdown-menu animated fadeInUp">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a class="dropdown-item" href="#">One more separated link</a></li>

                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Artificial intelligence</a></li>
                        </ul>
                    </div>
                </div>
                </nav>
                <!-- End Header 1 code -->
            </div>
        </div>    
        <!-- ============================================================== -->
        <!-- End Header 1  -->
            <div class="row m-t-40">
                @if (empty($kelases))
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
                                <div style="height:35vh; overflow: hidden;" class="bg-light">
                                    <a href="lihatkelas/{{$kelas->slug}}"><img class="card-img-top"  src="{{ URL::asset('storage/kelas') }}/{{ $kelas->foto }}" alt="wrappixel kit"></a>
                                </div>
                               @if ($kelas->harga <= 0 || null)
                               <div class="date-pos bg-success-gradiant"><span>GRATIS</span></div>
                               @else
                               <div class="date-pos bg-success-gradiant">RP.<span>{{$kelas->harga}}</span></div>
                               @endif
                                
                                <h5 class="font-medium m-t-30">{{$kelas->nama_kelas}}</h5>
                                <h6 class="m-t-20">
                                    <div class="row">
                                        <div class="col-md-5">
                                            @if ($kelas->harga <= 0 || null)
                                            GRATIS
                                            @else
                                            RP. {{ $kelas->harga}}
                                            @endif
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
                                <a data-toggle="collapse" href="lihatkelas/{{$kelas->slug}}" class="linking text-themecolor m-t-10">Lihat kelas <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                @endif
                
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Blog home 2  -->
    
@endsection