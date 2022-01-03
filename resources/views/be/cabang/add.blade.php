
@extends('layouts.be.master')

@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
@endsection

@section('content')
<section class="content">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Horizontal</strong> Layout</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                                <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form class="form-horizontal">
                        <div class="row clearfix">
                            <div class="col-md-2 col-sm-4 form-control-label">
                                <label for="email_address_2">Nama Cabang</label>
                            </div>
                            <div class="col-md-10 col-sm-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="_">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-2 col-sm-4 form-control-label">
                                <label >Kabupaten</label>
                            </div>
                            <div class="col-md-10 col-sm-8">
                                <div class="form-group">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-8 offset-md-3 offset-sm-2">
                                <div class="checkbox">
                                    <input id="remember_me_2" type="checkbox">
                                    <label for="remember_me_2">
                                            Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-8 offset-md-3 offset-sm-2">
                                <button type="button" class="btn btn-raised btn-primary btn-round waves-effect">LOGIN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>

@endsection