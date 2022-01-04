
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
                        <h2><strong>CETAK SYAHADAH BELAKANG</strong> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp">
                                    <li>
                                        <a href="#defaultModal" data-toggle="modal" data-target="#defaultModal">-</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <form action="">
                        <div class="body">
                            <div id="errList" class="text-uppercase"></div>
                            <div class="form-group">
                                <label for="">Jenis Program</label>
                                <select name="program_id" id="" class="form-control text-capitalize" required>
                                    <option value="">= Pilih Jenis Program =</option>
                                    @foreach ($program as $item)
                                        <option class="text-capitalize" value="{{ $item->id }}">{{ $item->jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="card">
                                <button class="btn btn-primary">CETAK</button>
                            </div> --}}
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="body">
                        <table id="example" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead style="text-transform: uppercase">
                                <tr>
                                    <th>cetak</th>
                                    <th>id</th>
                                    <th>nama pelatihan</th>
                                    <th>cabang</th>
                                    <th>tanggal</th>
                                </tr>
                            </thead>
                            <tbody style="text-transform: capitalize;">
                                {{--  --}}
                            </tbody>
                            <tfoot style="text-transform: uppercase">
                                <tr>
                                    <th>cetak</th>
                                    <th>id</th>
                                    <th>nama pelatihan</th>
                                    <th>cabang</th>
                                    <th>tanggal</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Dialogs ========= --> 
<!-- Default Size -->
<div class="modal fade" id="modal-print" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Cetak Syahadah Depan</h4>
            </div>
            <form action="{{route('cetak_depan')}}" method="POST" id="formaddkategori">@csrf
                <div class="modal-body"> 
                    <div class="form-group">
                        <input type="hidden" id="pelatihan_id" name="pelatihan_id" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="pelatihans" name="pelatihan" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" id="btnsimpan" class="text-white btn bg-blue waves-effect btn-round" value="CETAK">
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
    $(document).ready(function() {
        $('select[name="program_id"]').on('change', function() {
            var program_id = $(this).val();
            var table = $('#example').DataTable({
                order:[[1,"desc"]],
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: '/pilih-program-diklat/' + program_id,
                columns: [
                    {data: 'print', name:'print'},
                    {data: 'id', name: 'id'},
                    {data: 'nama_pelatihan', name: 'nama_pelatihan'},
                    {data: 'cabang', name: 'cabang'},
                    {data: 'tanggal', name: 'tanggal'},
                ]
            });                
        });
    });

    $('#modal-print').on('show.bs.modal', function(event) {
    var button          = $(event.relatedTarget)
    var pelatihan_id    = button.data('pelatihan_id')
    var nama_pelatihan  = button.data('nama_pelatihan');
    var namacabang      = button.data('namacabang');
    var modal = $(this)
    modal.find('.modal-body #pelatihan_id').val(pelatihan_id);
    modal.find('.modal-body #pelatihans').val(nama_pelatihan+' - '+namacabang);
    console.log(nama_pelatihan+' - '+namacabang);
    })
    </script> 

@endsection