@extends('layouts.user-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 bg-dark p-5">
                <div style="height:20vh"></div>
                <div style="transform: scale(0.8)">
                   <h1 class="text-white mb-5">Hello, {{ Auth::user()->name }}</h1>
                    <br><br>
                    <hr>
                    <h5 ><a href="dashboard" class="text-white">PROFILE</a> </h5>
                    <hr>
                    <h5 ><a href="dashboard/kelas-murid" class="text-white">KELAS YANG SAYA AMBIL</a></h5>
                    <div style="height:10vh"></div>
                    <hr>
                    <h5><a href="dashboard/buat-kelas" class="text-white">BUAT KELAS</a></h5>
                    <hr>
                    <h5 ><a href="dashboard/kelas-guru" class="text-white">KELAS SAYA</a></h5> 
                </div>
                
            </div>
            <div class="col-xl-10 bg-light">
                <div style="height:20vh"></div>

                <div class="row">
                    <div class="col-xl-3 mt-5 p-3">
                        <div class="card p-1 card-shadow" data-aos="flip-left" data-aos-duration="1200">
                            <a href="#" class="img-ho"><img class="card-img-top" src="images/team/t3.jpg" alt="wrappixel kit" /></a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8"><h5 class="font-medium m-b-0 d-inline">{{ Auth::user()->name }}</h5></div>
                                    <br><br>
                                </div>
                                <p class="m-b-0 font-14 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto repellendus veniam voluptate dolor vero expedita? Deleniti hic voluptatem praesentium neque expedita, alias, dolore molestias qui aspernatur sed sint, dolor eos?</p>
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
                                        <a href="#" class="link"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="link"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="link"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="link"><i class="fa fa-youtube-play"></i></a>
                                        <a href="#" class="link"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 p-5">
                        <form class="row pr-5">
                            <br>
                            <h3 class="title font-bold col-lg-12">PROFILE <hr></h3>
                            <br><br><br>
                            <div class="form-group col-lg-4">
                                <label for="nama">NAMA</label>
                                <input type="text"   class="form-control" id="nama">
                            </div>
                            <div class="form-group col-lg-5">
                                <label for="profile-pic">FOTO PROFILE</label>
                                <input type="file" class="form-control" id="profile-pic">
                            </div>
                            <div class="form-group col-lg-10">
                                <label for="Nomor Handphone">DESKRIPSI DIRI</label>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                            <h3 class="title font-bold col-lg-12 mt-5">SOSIAL MEDIA <hr></h3>
                            <div class="form-group col-lg-4">
                                <label for="facebook">FACEBOOK</label>
                                <input type="text"   class="form-control" id="facebook">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="twitter">TWITTER</label>
                                <input type="text"   class="form-control" id="twitter">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="instagram">INSTAGRAM</label>
                                <input type="text"   class="form-control" id="instagram">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="youtube">YOUTUBE</label>
                                <input type="text"   class="form-control" id="youtube">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="linkedin">LINKEDIN</label>
                                <input type="text"   class="form-control" id="linkedin">
                            </div>
                            <br>
                            <h3 class="title font-bold col-lg-12 mt-5">INFORMASI DIRI <hr></h3>
                            <br><br><br>
                            <div class="form-group col-lg-6">
                                <label for="Nomor Handphone">NOMOR HANDPHONE</label>
                                <input type="text"   class="form-control" id="Nomor Handphone">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="Alamat">ALAMAT</label>
                                <input type="text"  class="form-control" id="Alamat">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="jenis-kelamin">JENIS KELAMIN</label>
                                <input type="text"  class="form-control" id="jenis-kelamin">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="pekerjaan">PEKERJAAN</label>
                                <input type="text"  class="form-control" id="pekerjaan">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="tanggal-lahir">TANGGAL LAHIR</label>
                                <input type="text"  class="form-control" id="tanggal-lahir">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="tempat-lahir">TEMPAT LAHIR</label>
                                <input type="text"  class="form-control" id="tempat-lahir">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="nik">NIK</label>
                                <input type="text"  class="form-control" id="nik">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="npwp">NPWP</label>
                                <input type="text"  class="form-control" id="npwp">
                            </div>
                            <div class="form-group col-lg-5">
                                <label for="pendidikan-terakhir">PENDIDIKAN TERAKHIR</label>
                                <input type="text"  class="form-control" id="pendidikan-terakhir">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="kode-promosi">KODE PROMOSI</label>
                                <input type="text"  class="form-control" id="kode-promosi">
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="kode-affilasi">KODE AFFILASI</label>
                                <input type="text"  class="form-control" id="kode-affilasi">
                            </div>
                            <div class="form-group col-lg-5 text-right p-4">
                                <a href="dashboard" class="btn btn-success">BATAL</a>
                            </div>
                            <div class="form-group col-lg-7 text-left p-4">
                                <button type="submit" class="btn btn-danger-gradiant btn-arrow pr-5 pl-5"><span> SUBMIT <i class="ti-arrow-right"></i></span></button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
@endsection


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}