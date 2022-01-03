
@extends('layouts.be.master')

@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Master Data</a></li>
                        <li class="breadcrumb-item active">Pelatihan</li>
                    </ul>
                </div>            
                <div class="col-lg-7 col-md-7 col-sm-12">
                    
                    
                </div>
            </div>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>LIST DATA PELATIHAN</strong> </h2>
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
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead style="text-transform: capitalize; font-size: 11px">
                                    <tr>
                                        <th>Go</th>
                                        <th>Id</th>
                                        <th>Cabang</th>
                                        <th>Tanggal</th>
                                        <th>Nama Pelatihan</th>
                                        <th>Program</th>
                                        <th>Tempat</th>
                                        <th>Keterangan</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody style="text-transform: capitalize; font-size: 10px">
                                    {{--  --}}
                                </tbody>
                                <tfoot style="text-transform: capitalize; font-size: 11px">
                                    <tr>
                                        <th>Go</th>
                                        <th>Id</th>
                                        <th>Cabang</th>
                                        <th>Tanggal</th>
                                        <th>Nama Pelatihan</th>
                                        <th>Program</th>
                                        <th>Tempat</th>
                                        <th>Keterangan</th>
                                        <th>Total</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Dialogs ========= --> 
<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Kategori Baru</h4>
            </div>
            <form id="formaddkategori">@csrf
                <div class="modal-body"> 
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Nama Kategori" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" id="btnsimpan" class="text-white btn bg-blue waves-effect btn-round" value="SIMPAN">
                    <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalhapus" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="modal-header">
                    <h4 class="title" style="text-decoration-color: red; text-transform: uppercase">Hapus Kategori</h4>
                </div>
            </div>
            <form id="formhapuskategori">@csrf
            <div class="card" style="border-block: solid">
                
                    <div class="modal-body"> 
                        <input type="hidden" name="id" id="id_del">
                        <p>Yakin akan menghapus <strong> kategori :</strong></p> 
                        <p id="kategori_name"></p>
                    </div>
                
            </div>
            <div class="modal-footer" >
                <input type="submit" id="btnhapus" class="text-white btn bg-pink waves-effect btn-round" value="HAPUS">
                <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
    <script>
    $(document).ready(function(){
      var table = $('#example').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('page.laporan.pelatihan_list') }}",
          "columns": [
            { "data": 'masuk' },
            { "data": 'id' },
            { "data": 'cabang' },
            { "data": 'tanggals',"name":'tanggal' },
            { "data": 'nama_pelatihan' },
            { "data": 'program' },
            { "data": 'tempat' },
            { "data": 'keterangan' },
            { "data": 'total' },
            ]
      });
    });
    </script> 

@endsection