@extends('layouts.user-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('inc.dashboard-nav')
            <div class="col-xl-10 bg-light">
                <div style="height:20vh"></div>
                <div class="row">
                    <div class="col-xl-3 mt-5 p-3">
                        <div class="card p-1 card-shadow" data-aos="flip-left" data-aos-duration="1200">
                            <a href="#" class="img-ho"><img class="card-img-top" src="{{ URL::asset('storage/user') }}/{{ Auth::user()->foto }}" alt="wrappixel kit" /></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 text-center"><h5 class="font-medium m-b-0 d-inline">{{ Auth::user()->name }}</h5></div>
                                    <br><br>
                                </div>
                                <p class="m-b-0 font-14 ">{{Auth::user()->deskripsi_diri}}</p>
                                <hr>
                                <div class="row text-center">
                                    <div class="col-md-6">
                                        <span class="label label-light-inverse">GURU</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="label label-success">MURID</span>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <div class="round-social light text-center" style="transform: scale(0.8)">
                                        <a href="//www.facebook.com/{{Auth::user()->facebook}}" class="link"><i class="fa fa-facebook"></i></a>
                                        <a href="//www.twitter.com/{{Auth::user()->twitter}}" class="link"><i class="fa fa-twitter"></i></a>
                                        <a href="//www.linkedin.com/{{Auth::user()->linkedin}}" class="link"><i class="fa fa-linkedin"></i></a>
                                        <a href="//www.youtube.com/{{Auth::user()->youtube}}" class="link"><i class="fa fa-youtube-play"></i></a>
                                        <a href="//www.instagram.com/{{Auth::user()->instagram}}" class="link"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 p-5">
                        @include('inc.messages')
                        {!! Form::open(['action' => ['UserController@update', Auth::user()->id], 'method' => 'POST', 'enctype' => 'multipart/form-data' , 'class' => 'row pr-5']) !!}
                        {{-- <form class="row pr-5" action="UserController@update"> --}}
                            <br>
                            <h3 class="title font-bold col-lg-12">PROFILE <hr></h3>
                            <br><br><br>
                            <div class="form-group col-lg-4">
                                <label for="nama">NAMA</label>
                                <input type="text" value="{{Auth::user()->name}}" name="name"  class="form-control" id="nama">
                            </div>
                            <div class="form-group col-lg-5">
                                <label for="profile-pic">FOTO PROFILE</label>
                                <input type="file" value="default_user.png" name="foto" class="form-control" id="profile-pic">
                            </div>
                            <div class="form-group col-lg-10">
                                <label for="Nomor Handphone">DESKRIPSI DIRI</label>
                                <textarea name="deskripsi_diri" class="form-control" rows="5">{{Auth::user()->deskripsi_diri}}</textarea>
                            </div>
                            <h3 class="title font-bold col-lg-12 mt-5">SOSIAL MEDIA URL<hr></h3>
                            <div class="form-group col-lg-6">
                                <label for="facebook">FACEBOOK</label>
                                <input placeholder="https://facebook.com/contoh" type="text" value="{{Auth::user()->facebook}}" name="facebook" class="form-control" id="facebook">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="twitter">TWITTER</label>
                                <input placeholder="https://twitter.com/contoh" type="text" value="{{Auth::user()->twitter}}" name="twitter" class="form-control" id="twitter">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="instagram">INSTAGRAM</label>
                                <input placeholder="https://www.instagram.com/contoh/" type="text" value="{{Auth::user()->instagram}}" name="instagram"   class="form-control" id="instagram">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="youtube">YOUTUBE CHANNEL</label>
                                <input placeholder="https://www.youtube.com/c/contoh" type="text" value="{{Auth::user()->youtube}}" name="youtube"   class="form-control" id="youtube">
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="linkedin">LINKEDIN</label>
                                <input placeholder="https://www.linkedin.com/in/contoh" type="text" value="{{Auth::user()->linkedin}}" name="linkedin" class="form-control" id="linkedin">
                            </div>
                            <br>
                            <h3 class="title font-bold col-lg-12 mt-5">KONTAK <hr></h3>
                            <br><br><br>
                            <div class="form-group col-lg-5">
                                <label for="Nomor Handphone">NOMOR HANDPHONE</label>
                                <input placeholder="contoh: 08134567xxxx" type="text" value="{{Auth::user()->nomor_hp}}" name="nomor_hp" class="form-control" id="Nomor Handphone">
                            </div>
                            <div class="form-group col-lg-7">
                                <label for="Alamat">ALAMAT</label>
                                <input placeholder="contoh: Jalan Siliwangi No.27 RT 07 RW 18" type="text" value="{{Auth::user()->alamat}}" name="alamat" class="form-control" id="Alamat">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="provinsi">Provinsi</label>
                                <input type="text" readonly class="form-control" id="provinsi" placeholder="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="kota/kabupaten">Kota/Kabupaten</label>
                                <input type="text" readonly class="form-control" id="kota/kabupaten" placeholder="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" readonly class="form-control" id="kecamatan" placeholder="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="Kelurahan">Kelurahan</label>
                                <input type="text" readonly class="form-control" id="Kelurahan" placeholder="">
                            </div>
                            <br>
                            <h3 class="title font-bold col-lg-12 mt-5">INFORMASI DIRI <hr></h3>
                            <br><br><br>
                            
                            <div class="form-group col-lg-6">
                                <label for="pendidikan-terakhir">PENDIDIKAN TERAKHIR</label>
                                <select class="form-control" value="{{Auth::user()->pendidikan_terakhir}}" name="pendidikan_terakhir" id="pendidikan-terakhir">
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA</option>
                                    <option>KULIAH</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="pekerjaan">PEKERJAAN</label>
                                <input placeholder="contoh: Guru" type="text" value="{{Auth::user()->pekerjaan}}" name="pekerjaan"  class="form-control" id="pekerjaan">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="tanggal-lahir">TANGGAL LAHIR</label>
                                <input type="date" value="{{Auth::user()->tanggal_lahir}}" name="tanggal_lahir"  class="form-control" id="tanggal-lahir">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="tempat-lahir">TEMPAT LAHIR</label>
                                <input placeholder="contoh: JAKARTA" type="text" value="{{Auth::user()->tempat_lahir}}" name="tempat_lahir"  class="form-control" id="tempat-lahir">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="nik">NIK</label>
                                <input placeholder="contoh: 016797654xxxxxxxx" type="text" value="{{Auth::user()->nik}}" name="nik"  class="form-control" id="nik">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="npwp">NPWP</label>
                                <input placeholder="contoh: 12.345.678.9-012.xxx" type="text" value="{{Auth::user()->npwp}}" name="npwp"  class="form-control" id="npwp">
                            </div>
                            <div class="form-group col-lg-5">
                                <label for="jenis-kelamin">JENIS KELAMIN</label>
                                {{-- <input type="text" value="{{Auth::user()->jk}}" name="jk" class="form-control" id="jenis-kelamin"> --}}
                                <select class="form-control" value="{{Auth::user()->jk}}" name="jk" id="jenis-kelamin">
                                    <option>laki-laki</option>
                                    <option>perempuan</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="kode-promosi">KODE PROMOSI</label>
                                <input type="text" value="{{Auth::user()->kode_promosi}}" name="kode_promosi"  class="form-control" id="kode-promosi">
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="kode-affilasi">KODE AFFILASI</label>
                                <input type="text" value="{{Auth::user()->kode_affilasi}}" name="kode_affilasi"  class="form-control" id="kode-affilasi">
                            </div>
                            {!! Form::hidden('_method', 'PUT') !!}

                            <div class="form-group col-lg-12 text-left p-4 text-center">
                                <button type="submit" class="btn btn-danger-gradiant btn-arrow pr-5 pl-5"><span> SUBMIT <i class="ti-arrow-right"></i></span></button>
                            </div>
                            
                        {{-- </form> --}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection