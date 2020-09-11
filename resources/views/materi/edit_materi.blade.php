@extends('layouts.user-dashboard')

@section('style')
    <style>
        html .note-editor{
            background: white;
        }

        html .note-editor .panel-heading .note-btn-group button i,
        html .note-editor .panel-heading .note-btn-group button span{
            color: black;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('inc.dashboard-nav')
            <div class="col-xl-10 bg-light">
                <div style="height:20vh"></div>
                <div class="row justify-content-center">
                        <div style="height:20vh"></div>
                        <div class="col-xl-10 p-5">
                            @include('inc.messages')
                            {{-- <form class="row pr-5" action="MateriController@store" method="POST"> --}}
                            {!! Form::open(['action'=>['MateriController@update', $materi->id], 'method' => 'POST','enctype' => 'multipart/form-data' , 'class'=> 'row pr-5']) !!}
                            <h3 class="title font-bold col-lg-12 mt-5">EDIT MATERI <hr></h3>
                            <br><br><br>
                            <div class="form-group col-lg-8">
                                <label for="JUDUL MATERI">JUDUL MATERI</label>
                                <input type="text" value="{{$materi->judul}}" name="judul" class="form-control" id="JUDUL MATERI">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="URUTAN">MATERI KE :</label>
                                <input type="text" value="{{$materi->urutan}}" name="urutan" class="form-control" id="URUTAN">
                            </div>
                            <hr>
                            <div class="form-group col-lg-12">
                                <label for="DESKRIPSI MATERI">DESKRIPSI MATERI</label>
                                <textarea name="deskripsi" class="form-control" id="summernote" cols="30" rows="10">
                                    {{$materi->deskripsi}}
                                </textarea>
                            </div>
                            <h3 class="title font-bold col-lg-12 mt-5">FOTO, VIDEO, DAN FILE <hr></h3>
                            <br><br><br>
                            <div class="form-group col-lg-12">
                                <label for="foto">GAMBAR MATERI</label>
                                <input type="file" value="{{$materi->foto}}" name="foto" class="form-control" id="foto">
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="video">VIDEO YOUTUBE</label>
                                <input type="text" name="video" class="form-control" id="video">
                            </div>

                            <div class="col-lg-12 justify-content-left pl-4 mb-5">
                                <div class="embed-responsive embed-responsive-16by9">
                                    {{-- <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$kelas->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                                    <iframe id='youtube' width="853" height="480" src="https://www.youtube.com/embed/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="file">FILE PELAJARAN</label>
                                <input type="text" value="{{$materi->file}}" name="file" class="form-control" id="file">
                            </div>
                            {!! Form::hidden('_method', 'PUT')!!}
                            <div class="form-group col-lg-12 text-center p-4">
                                <button type="submit" class="btn btn-success"> EDIT MATERI </button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        jQuery(document).ready(function(){
        // $('#summernote').summernote();

        // VIDEO
        jQuery('#video').on('change', function(){
            
            var input = jQuery(this).val();

            function getId(url) {
            const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
            const match = url.match(regExp);

            return (match && match[2].length === 11)
            ? match[2]
            : null;
            }
            
            const videoId = getId(input);
            const iframeMarkup = '<iframe width="560" height="315" src="//www.youtube.com/embed/' 
                + videoId + '" frameborder="0" allowfullscreen></iframe>';
            
            $('#youtube').attr('src', "https://www.youtube.com/embed/"+ videoId);
        })
        // VIDEO END

        $('#summernote').summernote({
        tabsize: 5,
        height: 500
        });
        
        });
    </script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
