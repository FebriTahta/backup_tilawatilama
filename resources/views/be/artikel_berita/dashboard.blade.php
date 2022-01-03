@extends('layouts.be.sidebar')
@section('head')
<link rel="stylesheet" href="{{asset('be/assets/plugins/morrisjs/morris.css')}}" />
@endsection

@section('content')
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    
                    <div class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </div>
                </div>            
                <div class="col-lg-7 col-md-7 col-sm-12" style="text-align: right">
                    <h2>Pusat Data</h2>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                    <div class="body">
                        <p class="m-b-20"><i class="zmdi zmdi-eye zmdi-hc-3x col-amber"></i></p>
                        <span>Total Lembaga</span>
                        <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="{{$lembaga}}" data-speed="2000" data-fresh-interval="700">{{$lembaga}}</span></h3>
                        <small class="text-muted">aktif {{$lembaga_aktif}} & non aktif {{$lembaga_non_aktif}}</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                    <div class="body">
                        <p class="m-b-20"><i class="zmdi zmdi-assignment zmdi-hc-3x col-blue"></i></p>
                        <span>Pelatihan</span>
                        <h3 class="m-b-10 number count-to" data-from="0" data-to="{{$pelatihan}}" data-speed="2000" data-fresh-interval="700">{{$pelatihan}}</h3>
                        <small class="text-muted">-</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                    <div class="body">
                        <p class="m-b-20"><i class="zmdi  zmdi-balance zmdi-hc-3x col-purple"></i></p>
                        <span>Cabang</span>
                        <h3 class="m-b-10 number count-to" data-from="0" data-to="{{$cabang}}" data-speed="2000" data-fresh-interval="700">{{$cabang}}</h3>
                        <small class="text-muted">-</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                    <div class="body">
                        <p class="m-b-20"><i class="zmdi zmdi-account-box zmdi-hc-3x col-green"></i></p>
                        <span>Total Seluruh Peserta</span>
                        <h3 class="m-b-10 number count-to" data-from="0" data-to="{{$peserta}}" data-speed="2000" data-fresh-interval="700">{{$peserta}}</h3>
                        <small class="text-muted">-</small>
                    </div>
                </div>
            </div>
        </div>        
        <div class="row clearfix" style="display: none">
            <div class="col-lg-12 col-md-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2><strong>Visit</strong> & Sales Statistics</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                    <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body m-b-10">
                        <div id="m_area_chart"></div>
                    </div>
                    
                </div>
            </div>
        </div>
                  
    </div>
</section>
@endsection
<!-- Main Content -->
@section('script')
<script src="{{asset('be/assets/bundles/morrisscripts.bundle.js')}}"></script> <!-- Morris Plugin Js --> 
<script src="{{asset('be/assets/bundles/sparkline.bundle.js')}}"></script> <!-- sparkline Plugin Js --> 
<script src="{{asset('be/assets/js/pages/index.js')}}"></script>
@endsection
<!-- Jquery Core Js -->
