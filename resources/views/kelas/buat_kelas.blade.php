@extends('layouts.user-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('inc.dashboard-nav')
            <div class="col-xl-10 bg-light">
                <div style="height:20vh"></div>
                <div class="row justify-content-center">
                    <div style="height:20vh"></div>
                        <div class="col-xl-8 p-5">
                            @include('inc.messages')
                            {{-- <form class="row pr-5" action="KelasController@store" method="POST"> --}}
                                {!! Form::open(['action'=>'KelasController@store', 'method' => 'POST','enctype' => 'multipart/form-data' , 'class'=> 'row pr-5']) !!}
                                <h3 class="title font-bold col-lg-12 mt-5">BUAT KELAS <hr></h3>
                                <br><br><br>
                                <div class="form-group col-lg-8">
                                    <label for="NAMA KELAS">NAMA KELAS</label>
                                    <input type="text" value="" name="nama_kelas" class="form-control" id="NAMA KELAS">
                                </div>
                                <hr>
                                <div class="form-group col-lg-12">
                                    <label for="DESKRIPSI KELAS">DESKRIPSI KELAS</label>
                                    <textarea name="deskripsi" class="form-control" id="summary-ckeditor" cols="30" rows="10"></textarea>
                                </div>
                                <h3 class="title font-bold col-lg-12 mt-5">INFORMASI KELAS <hr></h3>
                                <br><br><br>
                                <div class="form-group col-lg-9">
                                    <label for="foto_thumbnail">THUMBNAIL KELAS</label>
                                    <input type="file" value="default.png" name="foto" class="form-control" id="foto_thumbnail">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="jenjang">JENJANG</label>
                                    <select class="form-control" value="SD" name="jenjang" id="jenjang">
                                        <option>SD</option>
                                        <option>SMP</option>
                                        <option>SMA</option>
                                        <option>UMUM</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="tingkat">TINGKAT</label>
                                    <select class="form-control" value="1" name="tingkat" id="tingkat">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="level">LEVEL</label>
                                    <select class="form-control" value="PEMULA" name="level" id="level">
                                        <option> - </option>
                                        <option>PEMULA</option>
                                        <option>SEDANG</option>
                                        <option>AHLI</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="harga">HARGA DALAM RUPIAH</label>
                                    <input type="number" value="" name="harga" class="form-control" id="harga">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="Diskon">DISKON PER PERSEN</label>
                                    <input type="number" value="" name="diskon" class="form-control" id="Diskon">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="DURASI">DURASI PER JAM</label>
                                    <input type="number" value="" name="durasi" class="form-control" id="DURASI">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="KAPASITAS">KAPASITAS PER ORANG</label>
                                    <input type="number" value="" name="kapasitas" class="form-control" id="KAPASITAS">
                                </div>
                                {{-- <input type="hidden" value="default_user.png" name="foto" class="form-control">
                                <input type="hidden" value="default_user.png" name="video" class="form-control">
                                <input type="hidden" value="default_user.png" name="kategori" class="form-control">
                                <input type="hidden" value="yes" name="berbayar" class="form-control">
                                <input type="hidden" value="yes" name="status" class="form-control">
                                <input type="hidden" value="yes" name="slug" class="form-control"> --}}
                                <div class="form-group col-lg-12 text-center p-4">
                                    <button type="submit" class="btn btn-success"> BUAT KELAS </button>
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

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
@endsection