@extends('layouts.fe.master')
@section('content')

<div class="container margin_60">
    <!--BERITA-->
    <div class="bg_gray">
        <div class="main_title center">
            <span><em></em></span>
            <h2>Bidang</h2>
            <p>Daaftar Menu & Bidang</p>
        </div>
        <div class="owl-carousel owl-theme categories_carousel">
            <div class="item_version_2">
                <a href="grid-listing-filterscol.html">
                    <figure>
                        <span>98</span>
                        <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_pizza.jpg" alt="" class="owl-lazy" width="350" height="450">
                        
                    </figure>
                </a>
            </div>
            <div class="item_version_2">
                <a href="grid-listing-filterscol.html">
                    <figure>
                        <span>87</span>
                        <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_sushi.jpg" alt="" class="owl-lazy" width="350" height="450">
                        
                    </figure>
                </a>
            </div>
            <div class="item_version_2">
                <a href="grid-listing-filterscol.html">
                    <figure>
                        <span>55</span>
                        <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_hamburgher.jpg" alt="" class="owl-lazy" width="350" height="450">
                        
                    </figure>
                </a>
            </div>
            <div class="item_version_2">
                <a href="grid-listing-filterscol.html">
                    <figure>
                        <span>55</span>
                        <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_vegetarian.jpg" alt="" class="owl-lazy" width="350" height="450">
                        
                    </figure>
                </a>
            </div>
            <div class="item_version_2">
                <a href="grid-listing-filterscol.html">
                    <figure>
                        <span>65</span>
                        <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_bakery.jpg" alt="" class="owl-lazy" width="350" height="450">
                        
                    </figure>
                </a>
            </div>
            <div class="item_version_2">
                <a href="grid-listing-filterscol.html">
                    <figure>
                        <span>25</span>
                        <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_chinesse.jpg" alt="" class="owl-lazy" width="350" height="450">
                        
                    </figure>
                </a>
            </div>
            <div class="item_version_2">
                <a href="grid-listing-filterscol.html">
                    <figure>
                        <span>35</span>
                        <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_mexican.jpg" alt="" class="owl-lazy" width="350" height="450">
                        
                    </figure>
                </a>
            </div>
        </div>

        <div class="container margin_60_40">
            <div class="main_title">
                <span><em></em></span>
                <h2>Kabar Terbaru</h2>
                <p>Kabar terbaru mengenai kegiatan tilawati & nurul falah</p>
                <a href="#0">Semua Berita &rarr;</a>
            </div>
            <div class="row add_bottom_25">
                <div class="col-md-4">
                    <article class="blog">
                        <figure>
                            <a href="blog-post.html"><img src="img/blog-2.jpg" alt="">
                                <div class="preview"><span>Read more</span></div>
                            </a>
                        </figure>
                        <div class="post_info">
                            <small>Category - 20 Nov. 2017</small>
                            <h2><a href="blog-post.html">At usu sale dolorum offendit</a></h2>
                            <p>Quodsi in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                            <ul>
                                <li>
                                    <div class="thumb"><img src="img/avatar.jpg" alt=""></div> Admin
                                </li>
                                <li><i class="icon_comment_alt"></i>20</li>
                            </ul>
                        </div>
                    </article>
                    <!-- /article -->
                </div>
                <div class="col-md-4">
                    <article class="blog">
                        <figure>
                            <a href="blog-post.html"><img src="img/blog-2.jpg" alt="">
                                <div class="preview"><span>Read more</span></div>
                            </a>
                        </figure>
                        <div class="post_info">
                            <small>Category - 20 Nov. 2017</small>
                            <h2><a href="blog-post.html">At usu sale dolorum offendit</a></h2>
                            <p>in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                            <ul>
                                <li>
                                    <div class="thumb"><img src="img/avatar.jpg" alt=""></div> Admin
                                </li>
                                <li><i class="icon_comment_alt"></i>20</li>
                            </ul>
                        </div>
                    </article>
                    <!-- /article -->
                </div>
                <div class="col-md-4">
                    <article class="blog">
                        <figure>
                            <a href="blog-post.html"><img src="img/blog-2.jpg" alt="">
                                <div class="preview"><span>Read more</span></div>
                            </a>
                        </figure>
                        <div class="post_info">
                            <small>Category - 20 Nov. 2017</small>
                            <h2><a href="blog-post.html">At usu sale dolorum offendit</a></h2>
                            <p>eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                            <ul>
                                <li>
                                    <div class="thumb"><img src="img/avatar.jpg" alt=""></div> Admin
                                </li>
                                <li><i class="icon_comment_alt"></i>20</li>
                            </ul>
                        </div>
                    </article>
                    <!-- /article -->
                </div>
            </div>
            <!-- /row -->
        </div>
    </div>

    <div class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1>Anda dapat memilih kategori artikel terbaru kami</h1>
                    <a href="#0">Lihat semua kategori artikel kami</a>
                </div>
            </div>
            <!-- /row -->		       
        </div>
    </div>

    <!--ARTIKEL-->
    <div class="container margin_30_20">
        <div class="row">
            <aside class="col-lg-3" id="sidebar_fixed">
                <div class="filterkategori_mobile" style="margin-bottom: 30px">
                    <a href="#collapseFilters" data-toggle="collapse" class="btn_filters"><i class="icon_adjust-vert"></i></a><label>PILIH KATEGORI</label>
                </div>

                <div class="collapse filters_2" id="collapseFilters">
                    <div class="container margin_30_20">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="filter_type">
                                    <h6>KATEGORI ARTIKEL TERBARU</h6>
                                    <ul>
                                        <li>
                                            <label class="container_check">Pizza - Italian <small>12</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Japanese - Sushi <small>24</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Burghers <small>23</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Vegetarian <small>11</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="filter_type">
                                    <h6>Rating</h6>
                                    <ul>
                                        <li>
                                            <label class="container_check">Superb 9+ <small>06</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Very Good 8+ <small>12</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Good 7+ <small>17</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Pleasant 6+ <small>43</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                </div>
            
                <div class="filter_col">
                    <div class="inner_bt clearfix">Filters<a href="#" class="open_filters"><i class="icon_close"></i></a></div>
                    {{-- <div class="filter_type">
                        <h4><a href="#filter_1" data-toggle="collapse" class="opened">JADWAL SHOLAT (SURABAYA)</a></h4>
                        <div class="collapse show" id="filter_1">
                            <ul>
                                <li>
                                    <label> Subuh 
                                    </label>
                                    <span class="checkmark float-right">{{$schedule['subuh']}} WIB</span>
                                </li>
                                <li>
                                    <label >Dzuhur
                                    </label>
                                    <span class="checkmark float-right">{{$schedule['dzuhur']}} WIB</span>
                                </li>
                                <li>
                                    <label >Ashar
                                    </label>
                                    <span class="checkmark float-right">{{$schedule['ashar']}} WIB</span>
                                </li>
                                <li>
                                    <label >Maghrib
                                    </label>
                                    <span class="checkmark float-right">{{$schedule['maghrib']}} WIB</span>
                                </li>
                                <li>
                                    <label >Isya
                                    </label>
                                    <span class="checkmark float-right">{{$schedule['isya']}} WIB</span>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <!-- /filter_type -->
                    <div class="filter_type">
                        <h4><a href="#filter_2" data-toggle="collapse" class="closed">KATEGORI ARTIKEL</a></h4>
                        <div class="collapse show" id="filter_2">
                            <div class="type_delivery">
                                <ul class="clearfix">
                                    <li>
                                        <label class="container_radio">All
                                            <input type="radio" name="type_d" value="all" id="all" checked data-filter="*" class="selected">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_radio">Kategori1
                                            <input type="radio" name="type_d" value="delivery" id="delivery" data-filter=".delivery">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_radio">Katgeori2
                                            <input type="radio" name="type_d" value="takeway" id="takeaway" data-filter=".takeaway">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                        </div>
                        </div>
                    </div>
                    <!-- /filter_type -->
                    
                    <!-- /filter_type -->
                    <div class="filter_type last">
                        <h4><a href="#filter_4" data-toggle="collapse" class="closed">BACA BERDASARKAN KATEGORI</a></h4>
                        <div class="collapse show" id="filter_4">
                            <div class="widget">
                                <div class="tags">
                                    <a href="#">Food</a>
                                    <a href="#">Bars</a>
                                    <a href="#">Cooktails</a>
                                    <a href="#">Shops</a>
                                    <a href="#">Best Offers</a>
                                    <a href="#">Transports</a>
                                    <a href="#">Restaurants</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /filter_type -->
                </div>
            </aside>

            <div class="col-lg-9">
                <div class="promo">
                    <h3>Artikel</h3>
                    <p>Perkaya pengetahuan dengan membaca artikel yang berkualitas.</p>
                </div>
                <!-- /promo -->
                
                <div class="row isotope-wrapper">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item delivery">
                        <div class="strip">
                            <figure>
                                <img src="img/lazy-placeholder.png" data-src="img/location_2.jpg" class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Jenis</small>
                                    <div class="item_title">
                                        <h3>JUDUL ARTIKEL</h3>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li>
                                    <span>Keterangan atau deskripsi singkat</span><br>
                                    <a class="text-primary" href="#0">baca selengkapnya</a>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item delivery">
                        <div class="strip">
                            <figure>
                                <img src="img/lazy-placeholder.png" data-src="img/location_2.jpg" class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Jenis</small>
                                    <div class="item_title">
                                        <h3>JUDUL ARTIKEL</h3>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li>
                                    <span>Keterangan atau deskripsi singkat</span><br>
                                    <a class="text-primary" href="#0">baca selengkapnya</a>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item delivery">
                        <div class="strip">
                            <figure>
                                <img src="img/lazy-placeholder.png" data-src="img/location_2.jpg" class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Jenis</small>
                                    <div class="item_title">
                                        <h3>JUDUL ARTIKEL</h3>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li>
                                    <span>Keterangan atau deskripsi singkat</span><br>
                                    <a class="text-primary" href="#0">baca selengkapnya</a>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item delivery">
                        <div class="strip">
                            <figure>
                                <img src="img/lazy-placeholder.png" data-src="img/location_2.jpg" class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Jenis</small>
                                    <div class="item_title">
                                        <h3>JUDUL ARTIKEL</h3>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li>
                                    <span>Keterangan atau deskripsi singkat</span><br>
                                    <a class="text-primary" href="#0">baca selengkapnya</a>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item delivery">
                        <div class="strip">
                            <figure>
                                <img src="img/lazy-placeholder.png" data-src="img/location_2.jpg" class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Jenis</small>
                                    <div class="item_title">
                                        <h3>JUDUL ARTIKEL</h3>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li>
                                    <span>Keterangan atau deskripsi singkat</span><br>
                                    <a class="text-primary" href="#0">baca selengkapnya</a>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item takeaway">
                        <div class="strip">
                            <figure>
                                <img src="img/lazy-placeholder.png" data-src="img/location_2.jpg" class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Jenis</small>
                                    <div class="item_title">
                                        <h3>JUDUL ARTIKEL</h3>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li>
                                    <span>Keterangan atau deskripsi singkat</span><br>
                                    <a class="text-primary" href="#0">baca selengkapnya</a>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item takeaway">
                        <div class="strip">
                            <figure>
                                <img src="img/lazy-placeholder.png" data-src="img/location_2.jpg" class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Jenis</small>
                                    <div class="item_title">
                                        <h3>JUDUL ARTIKEL</h3>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li>
                                    <span>Keterangan atau deskripsi singkat</span><br>
                                    <a class="text-primary" href="#0">baca selengkapnya</a>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item takeaway">
                        <div class="strip">
                            <figure>
                                <img src="img/lazy-placeholder.png" data-src="img/location_2.jpg" class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Jenis</small>
                                    <div class="item_title">
                                        <h3>JUDUL ARTIKEL</h3>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li>
                                    <span>Keterangan atau deskripsi singkat</span><br>
                                    <a class="text-primary" href="#0">baca selengkapnya</a>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item delivery">
                        <div class="strip">
                            <figure>
                                <img src="img/lazy-placeholder.png" data-src="img/location_2.jpg" class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Jenis</small>
                                    <div class="item_title">
                                        <h3>JUDUL ARTIKEL</h3>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li>
                                    <span>Keterangan atau deskripsi singkat</span><br>
                                    <a class="text-primary" href="#0">baca selengkapnya</a>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                {{-- <div class="pagination_fg">
                  <a href="#">&laquo;</a>
                  <a href="#" class="active">1</a>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>
                  <a href="#">5</a>
                  <a href="#">&raquo;</a>
                </div> --}}
            </div>
            <!-- /col -->
        </div>		
    </div>
@endsection