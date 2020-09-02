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
                                {!! Form::open(['action'=> ['PesertaController@update', $peserta->id], 'method' => 'POST', 'class'=> 'row pr-5']) !!}
                                <h3 class="title font-bold col-lg-12 mt-5"> BERI TESTIMONI & RATING <hr></h3>
                                <br><br><br>
                                <hr>
                                <div class="form-group col-lg-4">
                                    <label for="RATING">RATING</label>
                                    <select class="form-control" value="{{$peserta->rating}}" name="rating" id="RATING">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="TESTIMONI">TESTIMONI</label>
                                    <textarea name="testimoni"  class="form-control" cols="30" rows="10">{{$peserta->testimoni}}</textarea>
                                </div>
                                {!! Form::hidden('_method', 'PUT')!!}
                                <div class="form-group col-lg-12 text-center p-4">
                                    <button type="submit" class="btn btn-success"> SUBMIT </button>
                                </div>
                                {!! Form::close() !!}
                            {{-- </form> --}}
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
