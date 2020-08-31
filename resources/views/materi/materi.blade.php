@extends('layouts.user-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('inc.dashboard-nav')
            <div class="col-xl-10 bg-light">
                <div style="height:20vh"></div>
                <div class="row pr-5 justify-content-center">
                    <div style="height:15vh"></div>
                    <h3 class="title font-bold col-xl-8 mt-5" style="text-transform: uppercase">MATERI : {{$materi->urutan}} &nbsp;&nbsp; {{$materi->judul}} <hr></h3>
                    <div class="col-xl-6">
                        <a type="button" href="/materi/{{ $materi->id}}/edit" class="text-center btn-block btn btn-success-gradiant text-white"> EDIT MATERI <i class="ti-arrow-right"></i></a>
                    </div>
                    <div class="col-xl-2">
                        <a type="button" class="text-center btn-block btn btn-danger-gradiant text-white"> HAPUS</a>
                    </div>
                    <div style="height:20vh"></div>
                    <h3 class="title font-bold col-xl-10 text-center mt-5" style="text-transform: uppercase">PREVIEW MATERI <hr></h3>
                    <div class="col-xl-11 pr-5 pl-5 text-center">
                        <div class="col-xl-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$materi->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div style="height:15vh"></div>
                        <span class="label btn-success-gradiant label-rounded text-medium"> MATERI {{$materi->urutan}} </span>
                        <h3 class="title font-bold col-lg-12 mt-5" style="text-transform: uppercase">{{$materi->judul}}<hr></h3>
                        <h6 class="col-lg-12 mt-5 title text-left">{!! $materi->deskripsi !!}<hr></h6>
                        <a type="button" href="{{$materi->file}}" class="text-center btn btn-block waves-effect waves-light btn btn-success-gradiant text-white"> DOWNLOAD FILE PELAJARAN <i class="ti-arrow-down"></i></a>
                        <div style="height:15vh"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection