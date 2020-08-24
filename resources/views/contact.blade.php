@extends('layouts.master')

@section('content')

    @section('jumbo-title')
    <h1 class="title">KONTAK</h1>
    @endsection 

    @section('jumbo-content')
    <h4 class="subtitle font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
        Iusto hic deleniti quod eos sint unde perferendis, ipsam error maiores.</h4>
    @endsection


    <!-- ============================================================== -->
    <!-- text  -->
    <!-- ============================================================== -->
    <div class="spacer" id="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h1 class="title font-bold">@yield('text-header')</h1>
                    <h6 class="subtitle">@yield('text-content')</h6>
                </div>
            </div>        
        </div>    
    </div>
    <!-- ============================================================== -->
    <!-- End text  -->
    <!-- ============================================================== -->
    
@endsection