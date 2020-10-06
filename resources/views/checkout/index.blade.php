@extends('layouts.user-dashboard')

@section('content')
    <div class="container-fluid" style="padding-top: 20vh; min-height:100vh; background:black;">
        <div class="row justify-content-center" style="">
            <div class="col-md-9 mt-5">
                <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-8 p-5">
                                <div>
                                  <h5 class="title">AKESES KELAS AKAN DI BERIKAN KEPADA : </h5>
                                  <hr>
                                    <h6 class="bg-inverse text-white p-4">
                                        NAMA : {{$current_user->name}}
                                        <br><hr>
                                        EMAIL : {{$current_user->email}} 
                                    </h6>  
                                </div>
                                <div class="container" style="min-height: 5vh;"></div>
                                <div>
                                    <h5 class="title">PEMBAYARAN : </h5>
                                    <hr>
                                    <h6 class="bg-light p-4">
                                        HARGA KELAS : {{$kelas->harga}}
                                        <br><hr>
                                        @if ($kelas->diskon == 0 || $kelas->diskon == null)
                                            DISKON : 0  %
                                        @else
                                            DISKON : {{$kelas->diskon}} %
                                        @endif
                                        
                                        <br><hr>
                                        HARGA TOTAL : {{$kelas->harga}}
                                    </h6>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-xl-4 mt-5 pt-5 pb-5">
                                <div class="card" data-aos="flip-left" data-aos-duration="1200" >
                                    <div style="height:35vh; overflow: hidden;" class="bg-light">
                                        <a href="lihatkelas/{{$kelas->slug}}" style="min-height: 40vh; max-height: 40vh;"><img class="card-img-top" src="{{ URL::asset('storage/kelas') }}/{{ $kelas->foto }}" alt="wrappixel kit"></a>
                                    </div>
                                    <h5 class="font-medium m-t-30">{{$kelas->nama_kelas}}</h5>
                                    <h6 class="m-t-20">
                                        {{-- <div class="row">
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
                                        </div> --}}
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <h6>MENTOR : </h6>
                                            </div>
                                            <div class="col-md-7" style=" text-transform: uppercase ">
                                                <h6>{{ $user->name }}</h6>
                                            </div>
                                        </div>
                                    </h6>    
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3 mb-5">
                            <div class="col-md-5">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-block btn-info-gradiant" data-toggle="modal" data-target="#pembayaran">
                                    LANJUTKAN PEMBAYARAN
                                </button>
                            </div>
                            
                            
                            <!-- Modal -->
                            <div class="modal fade" id="pembayaran" tabindex="-1" role="dialog" aria-labelledby="pembayaran" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content p-2">
                                    <div class="modal-header">
                                    <div class="modal-title" id="pembayaran">
                                        <h5>TRANSFER PEMBAYARAN</h5> 
                                        <h6> Dengan harga total : {{$kelas->harga}} </h6>
                                     </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <div class="text-small" style="transform: scale(0.9)">
                                                TATA CARA PEMBAYARAN 
                                                <hr>
                                                1) Mentransfer uang sesuai dengan harga total
                                                <br>
                                                2) Menekan tombol "saya sudah melakukan pembayaran"
                                                <br>
                                                3) Melakukan konfirmasi dengan mengirim pesan WA
                                            </div>
                                            <hr>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3 justify-content-center">
                                                    <img style="width: 100px;" src="{{URL::asset('storage/bank/bca.png')}}" alt="wrapkit" />
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    Bank : 
                                                </div>
                                                <div class="col-md-6 text-right " style="color: black;">
                                                    BCA 
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 text-left">
                                                    No Rekening :
                                                </div>
                                                <div class="col-md-6 text-right " style="color: black;">
                                                    24356675432
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 text-left">
                                                    Penerima :
                                                </div>
                                                <div class="col-md-6 text-right " style="color: black;">
                                                    Harizaldy Cahya Pratama
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12 mb-3 justify-content-center">
                                                    <img style="width: 100px;" src="{{URL::asset('storage/bank/bni.png')}}" alt="wrapkit" />
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    Bank : 
                                                </div>
                                                <div class="col-md-6 text-right " style="color: black;">
                                                    BNI 
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 text-left">
                                                    No Rekening :
                                                </div>
                                                <div class="col-md-6 text-right " style="color: black;">
                                                    24356675432
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 text-left">
                                                    Penerima :
                                                </div>
                                                <div class="col-md-6 text-right " style="color: black;">
                                                    Harizaldy Cahya Pratama
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12 mb-3 justify-content-center">
                                                    <img style="width: 100px;" src="{{URL::asset('storage/bank/mandiri.png')}}" alt="wrapkit" />
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    Bank : 
                                                </div>
                                                <div class="col-md-6 text-right " style="color: black;">
                                                    MANDIRI 
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 text-left">
                                                    No Rekening :
                                                </div>
                                                <div class="col-md-6 text-right " style="color: black;">
                                                    24356675432
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 text-left">
                                                    Penerima :
                                                </div>
                                                <div class="col-md-6 text-right " style="color: black;">
                                                    Harizaldy Cahya Pratama
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12 mb-3 justify-content-center">
                                                    <img style="width: 100px;" src="{{URL::asset('storage/bank/whatsapp.png')}}" alt="wrapkit" />
                                                </div>
                                                <div class="col-md-8 title text-left" style="color: black;">
                                                    KONFIRMASI PEMBAYARAN : 
                                                </div>
                                                <div class="col-md-4 text-right ">
                                                    
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row p-1">
                                                <div class="col-md-6 text-left">
                                                    Harizaldy Cahya Pratama :
                                                </div>
                                                <div class="col-md-6 text-right " style="color: black;">
                                                    08254645343244
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                        <button type="button" class="btn btn-success-gradiant mb-2 mt-2"> SAYA SUDAH MELAKUKAN PEMBAYARAN </button>
                                    </div>
                                </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="min-height: 20vh"></div>
    </div>
@endsection


@section('script')

@endsection
