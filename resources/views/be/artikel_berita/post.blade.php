
@extends('layouts.be.master')

@section('head')
@endsection

@section('content')
<section class="content blog-page">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    
                    <ul class="breadcrumb p-l-0 p-b-0">
                        <li class="breadcrumb-item"><a href="#"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Artikel & Blog</a></li>
                        <li class="breadcrumb-item active">Postingan Baru</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                    <h2>Postingan Baru</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Blog title" />
                        </div>
                        <select class="form-control show-tick">
                            <option>Select Category --</option>
                            <option>Web Design</option>
                            <option>Photography</option>
                            <option>Technology</option>
                            <option>Lifestyle</option>
                            <option>Sports</option>
                        </select>
                        {{-- <form action="/" id="frmFileUpload" class="dropzone m-b-20 m-t-20" method="post" enctype="multipart/form-data">
                            <div class="dz-message">
                                <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                <h3>Drop files here or click to upload.</h3>
                                <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form> --}}
                        <div class="form-group">
                            <p></p>
                            <textarea class="form-control" id="ckeditor" style="margin-top: 20px"></textarea>
                            <button type="button" class="btn btn-primary btn-round waves-effect m-t-20">Post</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>
@endsection

@section('script')
    <!-- Jquery Core Js -->  

<script src="{{asset('be/assets/plugins/dropzone/dropzone.js')}}"></script> <!-- Dropzone Plugin Js --> 
<script src="{{asset('be/assets/plugins/ckeditor/ckeditor.js')}}"></script> <!-- Ckeditor -->

<script src="{{asset('be/assets/js/pages/forms/editors.js')}}"></script>
@endsection