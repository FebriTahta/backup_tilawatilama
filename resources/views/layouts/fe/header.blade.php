<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FooYes - Quality delivery or takeaway food">
    <meta name="author" content="Ansonika">
    <title>Nurul Falah</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/bootstrap_customized.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('revolution-slider/fonts/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('revolution-slider/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('revolution-slider/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('revolution-slider/css/navigation.css')}}">
    <!-- BASE CSS -->

    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    
    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/listing.css')}}" rel="stylesheet">
    <link href="{{asset('css/leaflet.css')}}" rel="stylesheet">
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
    
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
</head>

<body>
                
    <header class="header clearfix element_to_stick">
        <div class="container">
            <div id="logo">
                <a href="index.html">
                    <img src="{{asset('img/logo.svg')}}" width="162" height="35" alt="" class="logo_normal">
                    <img src="{{asset('img/logo_sticky.svg')}}" width="162" height="35" alt="" class="logo_sticky">
                </a>
            </div>
            <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
            <ul id="top_menu">
                <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
                <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
            </ul>
            <!-- /top_menu -->
            <a href="#0" class="open_close">
                <i class="icon_menu"></i><span>Menu</span>
            </a>
           <nav class="main-menu">
                <div id="header_menu">
                    <a href="#0" class="open_close">
                        <i class="icon_close"></i><span>Menu</span>
                    </a>
                    <a href="index.html"><img src="img/logo.svg" width="162" height="35" alt=""></a>
                </div>
                <ul>
                    <li class="submenu">
                        <a href="#0" class="show-submenu">Home</a>
                        <ul>
                            <li><a href="index.html">Address Autocomplete</a></li>
                            <li><a href="index-2.html">Search by Keyword</a></li>
                            <li><a href="index-3.html">Home Version 2</a></li>
                            <li><a href="index-4.html">Video Bg Fallback Mobile</a></li>
                            <li class="third-level"><a href="#0">Sliders - Parallax <strong>New!</strong></a>
                                <ul>
                                    <li><a href="index-6.html">Owl Carousel</a></li>
                                    <li><a href="index-7.html">Revolution Slider 1</a></li>
                                    <li><a href="index-8.html">Revolution Slider 2</a></li>
                                    <li><a href="index-9.html">Youtube/Vimeo Parallax</a></li>
                                    <li><a href="index-10.html">MP4 Video Parallax</a></li>
                                    <li><a href="index-11.html">Parallax Image</a></li>
                                </ul>
                            </li>
                            <li><a href="index-12.html">Text Rotator <strong>New!</strong></a></li>
                            <li><a href="index-5.html">GDPR Cookie Bar EU Law</a></li>
                            <li><a href="header-user-logged.html">Header User Logged</a></li>
                            <li><a href="header-cart-top.html">Header Cart Top</a></li>
                            <li><a href="modal-advertise.html">Modal 1 Cookie Session</a></li>
                            <li><a href="modal-newsletter.html">Modal 2 Cookie Session</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#0" class="show-submenu">Listing</a>
                        <ul>
                            <li class="third-level"><a href="#0">List pages</a>
                                <ul>
                                    <li><a href="grid-listing-filterscol.html">List default</a></li>
                                    <li><a href="grid-listing-filterscol-map.html">List with map</a></li>
                                    <li><a href="listing-map.html">List side map</a></li>
                                    <li><a href="grid-listing-masonry.html">List Masonry Filter</a></li>
                                </ul>
                            </li>
                            <li class="third-level"><a href="#0">Detail pages</a>
                                <ul>
                                    <li><a href="detail-restaurant.html">Detail page 1</a></li>
                                    <li><a href="detail-restaurant-2.html">Detail page 2</a></li>
                                    <li><a href="detail-restaurant-3.html">Detail page 3</a></li>
                                    <li><a href="detail-restaurant-4.html">Detail page 4</a></li>
                                </ul>
                            </li>
                            <li class="third-level"><a href="#0">OpenStreetMap</a>
                                <ul>
                                    <li><a href="grid-listing-filterscol-openstreetmap.html">List with map</a></li>
                                    <li><a href="listing-map-openstreetmap.html">List side map</a></li>
                                    <li><a href="grid-listing-masonry-openstreetmap.html">List Masonry Filter</a></li>
                                </ul>
                            </li>
                            <li><a href="submit-restaurant.html">Submit Restaurant</a></li>
                            <li><a href="submit-rider.html">Submit Rider</a></li>
                            <li><a href="order.html">Order</a></li>
                            <li><a href="confirm.html">Confirm Order</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#0" class="show-submenu">Other Pages</a>
                       <ul>
				        <li><a href="admin_section/index.html" target="_blank">Admin Section</a></li>
				        <li><a href="404.html">404 Error</a></li>
				        <li><a href="help.html">Help and Faq</a></li>
				        <li><a href="blog.html">Blog</a></li>
				        <li><a href="leave-review.html">Leave a review</a></li>
				        <li><a href="contacts.html">Contacts</a></li>
				        <li><a href="coming_soon/index.html">Coming Soon</a></li>
				        <li><a href="login.html">Sign In</a></li>
				        <li><a href="register.html">Sign Up</a></li>
				        <li><a href="icon-pack-1.html">Icon Pack 1</a></li>
				        <li><a href="icon-pack-2.html">Icon Pack 2</a></li>
				        <li><a href="shortcodes.html">Shortcodes</a></li>
				    </ul>
                    </li>
                    <li><a href="#0">Buy this template</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- /header -->

    <main>