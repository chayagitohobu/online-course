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
                            {{-- <form class="row pr-5" action="KelasController@store" method="POST"> --}}
                                {!! Form::open(['action'=> ['KelasController@update', $kelas->id], 'method' => 'POST', 'enctype' => 'multipart/form-data' , 'class'=> 'row pr-5']) !!}
                                <h3 class="title font-bold col-lg-12 mt-5">EDIT KELAS <hr></h3>
                                <br><br><br>
                                <div class="form-group col-lg-5">
                                    <label for="NAMA KELAS">NAMA KELAS</label>
                                <input type="text" value="{{$kelas->nama_kelas}}" name="nama_kelas" class="form-control" id="NAMA KELAS">
                                </div>
                                <hr>
                                <div class="form-group col-lg-12">
                                    <label for="DESKRIPSI KELAS">DESKRIPSI KELAS</label>
                                    <textarea name="deskripsi"  class="form-control" id="summernote" cols="30" rows="10" >
                                        {{$kelas->deskripsi}}</textarea>
                                </div>
                                <h3 class="title font-bold col-lg-12 mt-5">INFORMASI KELAS <hr></h3>
                                <br><br><br>
                                <div class="form-group col-lg-9">
                                    <label for="foto_thumbnail">THUMBNAIL KELAS</label>
                                    <input type="file" value="{{$kelas->foto}}" name="foto" class="form-control" id="foto_thumbnail">
                                </div>
                                <div class="col-lg-12 justify-content-left pl-4">
                                    <div class="form-group col-lg-7  card p-2 mt-3">
                                        <img class="card-img-top" id="img" src="{{ URL::asset('storage/kelas') }}/default.png" alt="your image" />
                                    </div>
                                </div>

                                <div class="form-group col-lg-9">
                                    <label for="video">VIDEO PREVIEW</label>
                                    <input type="text" name="video" class="form-control" id="video" placeholder="https://www.youtube.com/watch?v=AKq8Hyu1v-k">
                                </div>

                                <div class="col-lg-12 justify-content-left pl-4 mb-5">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        {{-- <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$kelas->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                                        <iframe id='youtube' width="853" height="480" src="https://www.youtube.com/embed/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                
                                <div class="form-group col-lg-4">
                                    <label for="jenjang">JENJANG</label>
                                    <select class="form-control" value="{{$kelas->jenjang}}" name="jenjang" id="jenjang">
                                        <option>UMUM</option>
                                        <option>SD</option>
                                        <option>SMP</option>
                                        <option>SMA</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="tingkat">TINGKAT</label>
                                    <select class="form-control" value="{{$kelas->tingkat}}" name="tingkat" id="tingkat">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="level">LEVEL</label>
                                    <select class="form-control" value="{{$kelas->level}}" name="level" id="level">
                                        <option>PEMULA</option>
                                        <option>SEDANG</option>
                                        <option>AHLI</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="harga">HARGA DALAM RUPIAH</label>
                                    <input type="number" value="{{$kelas->harga}}" name="harga" class="form-control" id="harga">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="Diskon">DISKON PER PERSEN</label>
                                    <input type="number" value="{{$kelas->diskon}}" name="diskon" class="form-control" id="Diskon">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="DURASI">DURASI PER JAM</label>
                                    <input type="number" value="{{$kelas->durasi}}" name="durasi" class="form-control" id="DURASI">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="KAPASITAS">KAPASITAS PER ORANG</label>
                                    <input type="number" value="{{$kelas->kapasitas}}" name="kapasitas" class="form-control" id="KAPASITAS">
                                </div>
                                {{-- <input type="hidden" value="default_user.png" name="foto" class="form-control">
                                <input type="hidden" value="default_user.png" name="video" class="form-control">
                                <input type="hidden" value="default_user.png" name="kategori" class="form-control">
                                <input type="hidden" value="yes" name="berbayar" class="form-control">
                                <input type="hidden" value="yes" name="status" class="form-control">
                                <input type="hidden" value="yes" name="slug" class="form-control"> --}}
                                {!! Form::hidden('_method', 'PUT')!!}
                                <div class="form-group col-lg-12 text-center p-4">
                                    <button type="submit" class="btn btn-success"> EDIT KELAS </button>
                                </div>
                                {!! Form::close() !!}
                            {{-- </form> --}}
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script type="text/javascript">

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

            // Image    

            $(function(){
                $('#foto_thumbnail').change(function(){
                    var input = this;
                    var url = $(this).val();
                    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
                    {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                        $('#img').attr('src', e.target.result);
                        }
                    reader.readAsDataURL(input.files[0]);
                    }
                    else
                    {
                    $('#img').attr('src', 'storage/kelas/default.png');
                    }
                });

            });
            // image end


            $('#summernote').summernote({
                tabsize: 5,
                height: 300
            });

            jQuery('select[name= "jenjang"]').on('change', function(){
                var jenjang = jQuery(this).val();
                
                if(jenjang == 'UMUM'){
                    $('select[name = "tingkat"]').empty();
                    $('select[name = "tingkat"]').hide();
                }
                
                if(jenjang == 'SD'){

                    $('select[name = "tingkat"]').empty();
                    $('select[name = "tingkat"]').show();
                    $('select[name = "tingkat"]').append(
                    "<option>1</option>"
                    +"<option>2</option>"
                    +"<option>3</option>"
                    +"<option>4</option>"
                    +"<option>5</option>"
                    +"<option>6</option>"
                    );
                }

                if(jenjang == 'SMP'){

                    $('select[name = "tingkat"]').empty();
                    $('select[name = "tingkat"]').show();
                    $('select[name = "tingkat"]').append("<option>7</option>"+"<option>8</option>"+"<option>9</option>");
                }
                
                if(jenjang == 'SMA'){
                    $('select[name = "tingkat"]').empty();
                    $('select[name = "tingkat"]').show();
                    $('select[name = "tingkat"]').append("<option>10</option>"+"<option>11</option>"+"<option>12</option>");
                }

            })

        });

    </script>

    {{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script> --}}

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

