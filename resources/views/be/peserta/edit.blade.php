@extends('layouts.be.master')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Data Peserta</a></li>
                        <li class="breadcrumb-item active">Update</li>
                    </ul>
                </div>            
                <div class="col-lg-7 col-md-7 col-sm-12">
                    
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>DATA PESERTA</strong> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp">
                                    <li>
                                        <a href="#defaultModal" data-toggle="modal" data-target="#defaultModal">Karegori baru</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="body">
                        <div id="errList" class="text-uppercase"></div>
                        <form action="{{route('post_admin_peserta')}}" method="POST"> @csrf 
                            <div class="row">
                                <input type="hidden" name="id" value="{{$data->id}}" required>
                                <div class="col-md-6"><div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" value="{{$data->nama}}" class="form-control" required>
                                </div></div>
                                <div class="col-md-6"><div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" value="{{$data->alamat}}" class="form-control" required>
                                </div></div>
                                <div class="col-md-6"><div class="form-group">
                                    <label>Kota</label>
                                    <input type="text" name="kota" value="{{$data->kota}}" class="form-control" required>
                                </div></div>
                                <div class="col-md-6"><div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="telp" value="{{$data->telp}}" class="form-control">
                                </div></div>
                                <div class="col-md-6"><div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tmptlahir" value="{{$data->tmplahir}}" class="form-control" required>
                                </div></div>
                                <div class="col-md-6"> <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgllahir" value="{{$data->tgllahir}}" class="form-control" required>
                                </div></div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary" type="submit">UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection