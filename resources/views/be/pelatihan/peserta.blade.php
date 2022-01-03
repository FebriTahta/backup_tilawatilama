
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
                        <h2><strong>DAFTAR PESERTA {{$data->nama_pelatihan}}</strong> </h2>
                        <h5>{{$data->cabang->namacabang}} {{\Carbon\Carbon::parse($data->tanggal)->isoFormat('D/M/YYYY');}}</h5>
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
                    
                    <input type="hidden" id="pelatihan_id" value="{{$data->id}}">
                    <div class="body">
                        <div id="errList" class="text-uppercase"></div>
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead style="text-transform: capitalize; font-size: 11px">
                                    <tr>
                                        <th>Edit</th>
                                        <th>id</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Telp</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        {{-- <th>Option</th> --}}
                                    </tr>
                                </thead>
                                <tbody style="text-transform: capitalize; font-size: 10px">
                                    {{--  --}}
                                </tbody>
                                <tfoot style="text-transform: capitalize; font-size: 11px">
                                    <tr>
                                        <th>Edit</th>
                                        <th>id</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Telp</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        {{-- <th>Option</th> --}}
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

<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">EDIT PESERTA</h4>
            </div>
            <form id="formeditpeserta">@csrf
                <div class="modal-body"> 
                    <div class="form-group">
                        <input type="text" style="text-transform: uppercase" name="id" id="id" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for=""><u>Nama Peserta</u></label>
                        <input type="text" name="nama" style="text-transform: uppercase" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for=""><u>Alamat</u></label>
                        <textarea name="alamat" id="alamat" style="text-transform: uppercase" cols="30" rows="2" class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for=""><u>Kota</u></label>
                            <input type="text" name="kota" style="text-transform: uppercase" id="kota" class="form-control" required>
                        </div>
                        <div class="form-group col-6">
                            <label for=""><u>Telp</u></label>
                            <input type="text" name="telp" id="telp" class="form-control">
                        </div>
                    
                        <div class="form-group col-6">
                            <label for=""><u>Tempat Lahir</u></label>
                            <input type="text" name="tmplahir" style="text-transform: uppercase" id="tmplahir" class="form-control" required>
                        </div>
                        <div class="form-group col-6">
                            <label for=""><u>Tanggal Lahir</u></label>
                            <input type="text" name="tgllahir" id="tgllahir" class="form-control" required>
                        </div>
                    </div>
                    
                    <h2>PENILAIAN</h2>
                    <div class="row">
                        <div class="form-group col-4">
                            <label for=""><u>FS</u></label>
                            <input type="text" class="form-control" name="fs" id="fs" required>
                        </div>
                        <div class="form-group col-4">
                            <label for=""><u>TJ</u></label>
                            <input type="text" class="form-control" name="tj" id="tj" required>
                        </div>
                        <div class="form-group col-4">
                            <label for=""><u>GM</u></label>
                            <input type="text" class="form-control" name="gm" id="gm" required>
                        </div>
                        <div class="form-group col-4">
                            <label for=""><u>SL</u></label>
                            <input type="text" class="form-control" name="sl" id="sl" required>
                        </div>
                        <div class="form-group col-4">
                            <label for=""><u>MT</u></label>
                            <input type="text" class="form-control" name="mt" id="mt" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" id="btnedit" class="text-white btn bg-blue waves-effect btn-round" value="SIMPAN">
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
      var pelatihan_id = $("#pelatihan_id").val();
      console.log(pelatihan_id);
      var table = $('#example').DataTable({
          processing: true,
          serverSide: true,
          ajax: "/admin-peserta-pelatihan/"+pelatihan_id+"/list",
          "columns": [

            //untuk membuat data index
            // { data: 'no', name:'id', render: function (data, type, row, meta) {
            //     return meta.row + meta.settings._iDisplayStart + 1;
            // }},
            { "data": 'edit' },
            { "data": 'id' },
            //samakan data kolom sesuai dt di data.php
            { "data": 'nama' },
            { "data": 'alamat' },
            { "data": 'kota' },
            { "data": 'telp' },
            { "data": 'tmplahir' },
            { "data": 'tgllahir' },
            // { "data": 'option' },
            ]
      });
    });

    $('#formaddkategori').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
        type:'POST',
        url: "{{ route('page.master.kategori_post')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        beforeSend:function(){
            $('#btnsimpan').attr('disabled','disabled');
            $('#btnsimpan').val('Process');
        },
        success: function(response){
            if(response.status == 200)
            {
                // $("#formupdateproduct")[0].reset();
                var oTable = $('#example').dataTable();
                $("#formaddkategori")[0].reset();
                oTable.fnDraw(false);
                $('#btnsimpan').val('SIMPAN');
                $('#btnsimpan').attr('disabled',false);
                $('#defaultModal').modal('hide');
                toastr.success(response.message);
            }else{
                // $("#formupdateproduct")[0].reset();
                $('#btnsimpan').val('SIMPAN');
                $('#btnsimpan').attr('disabled',false);
                $('#defaultModal').modal('hide');
                toastr.error(response.message);
                $('#errList').html("");
                $('#errList').addClass('alert alert-danger');
                $.each(response.errors, function(key, err_values) {
                    $('#errList').append('<div>'+err_values+'</div>');
                });
            }
        },
            error: function(data)
            {
            console.log(data);
            }
        });
    });

    $('#modalhapus').on('show.bs.modal', function(event) {
    var button  = $(event.relatedTarget)
    var id      = button.data('id')
    var name    = button.data('name');
    var modal = $(this)
    modal.find('.modal-body #id_del').val(id);
    modal.find('.modal-body #kategori_name').html(name);
    })

    $('#modal-edit').on('show.bs.modal', function(event) {
    var button  = $(event.relatedTarget)
    var id      = button.data('id')
    var nama    = button.data('nama');
    var alamat    = button.data('alamat');
    var kota    = button.data('kota');
    var telp    = button.data('telp');
    var tmplahir    = button.data('tmplahir');
    var tgllahir    = button.data('tgllahir');
    var fs    = button.data('fs');
    var tj    = button.data('tj');
    var gm    = button.data('gm');
    var sl    = button.data('sl');
    var mt    = button.data('mt');
    var modal = $(this)
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #nama').val(nama);
    modal.find('.modal-body #alamat').val(alamat);
    modal.find('.modal-body #kota').val(kota);
    modal.find('.modal-body #telp').val(telp);
    modal.find('.modal-body #tmplahir').val(tmplahir);
    modal.find('.modal-body #tgllahir').val(tgllahir);
    modal.find('.modal-body #fs').val(fs);
    modal.find('.modal-body #tj').val(tj);
    modal.find('.modal-body #gm').val(gm);
    modal.find('.modal-body #sl').val(sl);
    modal.find('.modal-body #mt').val(mt);
    })

    $('#formhapuskategori').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
        type:'POST',
        url: "{{ route('page.master.kategori_delete')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        beforeSend:function(){
            $('#btnhapus').attr('disabled','disabled');
            $('#btnhapus').val('Process');
        },
        success: function(response){
            if(response.status == 200)
            {
                // $("#formupdateproduct")[0].reset();
                var oTable = $('#example').dataTable();
                oTable.fnDraw(false);
                $('#btnhapus').val('HAPUS');
                $('#btnhapus').attr('disabled',false);
                $('#modalhapus').modal('hide');
                toastr.success(response.message);
            }else{
                // $("#formupdateproduct")[0].reset();
                $('#btnhapus').val('Update Product');
                $('#btnhapus').attr('disabled',false);
                $('#modalhapus').modal('hide');
                toastr.error(response.message);
                $('#errList').html("");
                $('#errList').addClass('alert alert-danger');
                $.each(response.errors, function(key, err_values) {
                    $('#errList').append('<div>'+err_values+'</div>');
                });
            }
        },
            error: function(data)
            {
            console.log(data);
            }
        });
    });

    $('#formeditpeserta').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
        type:'POST',
        url: "{{ route('page.laporan.peserta_pelatihan_edit')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        beforeSend:function(){
            $('#btnedit').attr('disabled','disabled');
            $('#btnedit').val('Process');
        },
        success: function(response){
            if(response.status == 200)
            {
                // $("#formupdateproduct")[0].reset();
                var oTable = $('#example').dataTable();
                oTable.fnDraw(false);
                $('#btnedit').val('SIMPAN');
                $('#btnedit').attr('disabled',false);
                $('#modal-edit').modal('hide');
                toastr.success(response.message);
            }else{
                // $("#formupdateproduct")[0].reset();
                $('#btnedit').val('Update Product');
                $('#btnedit').attr('disabled',false);
                $('#modal-edit').modal('hide');
                toastr.error(response.message);
                $('#errList').html("");
                $('#errList').addClass('alert alert-danger');
                $.each(response.errors, function(key, err_values) {
                    $('#errList').append('<div>'+err_values+'</div>');
                });
            }
        },
            error: function(data)
            {
            console.log(data);
            }
        });
    });
    </script> 

@endsection