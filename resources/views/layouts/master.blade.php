<!DOCTYPE html>
<html lang="zxx">

<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="fontend/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="fontend/images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>Doctors Appointment</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link  href="{{asset('fontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- FONTAWESOME STYLE SHEET -->
    <link  href="{{asset('fontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Feather STYLE SHEET -->
    <link href="{{asset('fontend/css/feather.css')}}" rel="stylesheet">

    <!-- Font STYLE SHEET -->
    <link href="{{asset('fontend/css/font.css')}}" rel="stylesheet">    
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link href="{{asset('fontend/css/owl.carousel.min.css')}}" rel="stylesheet">
    <!-- SLICK CAROUSEL STYLE SHEET -->
    <link href="{{asset('fontend/css/slick.min.css')}}" rel="stylesheet">
    <!-- SLICK STYLE SHEET -->
    <link href="{{asset('fontend/css/slick-theme.css')}}" rel="stylesheet">
    <!-- Custome scrollbar STYLE SHEET  -->
    <link href="{{asset('fontend/css/jquery.scrollbar.css')}}" rel="stylesheet">  
    <!-- DropZone STYLE SHEET  --> 
    <link href="{{asset('fontend/css/dropzone.css')}}" rel="stylesheet">       
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link href="{{asset('fontend/css/magnific-popup.min.css')}}" rel="stylesheet">
    <!-- FLATICON STYLE SHEET -->
    <link href="{{asset('fontend/css/flaticon.min.css')}}" rel="stylesheet">
    <!-- Lc light box popup -->
    <link href="{{asset('fontend/css/lc_lightbox.css')}}" rel="stylesheet">     
    <!-- Price Range Slider -->
    <link href="{{asset('fontend/css/bootstrap-slider.min.css')}}" rel="stylesheet">
    <!-- Bootstrap-toggle -->
    <link href="{{asset('fontend/css/bootstrap4-toggle.min.css')}}" rel="stylesheet">
    <!-- Bootstrap-datatables -->
    <link href="{{asset('fontend/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <!-- Date-picker -->
    <link href="{{asset('fontend/css/date-picker.css')}}" rel="stylesheet">
    <!-- Full calendar -->
    <link href="{{asset('fontend/css/fullcalendar.min.css')}}" rel="stylesheet">   
    <!-- MAIN STYLE SHEET -->
    <link href="{{asset('fontend/css/style.css')}}" rel="stylesheet">   

</head>

<body>


<!-- LOADING AREA  END ====== -->
    
	<div class="page-wraper">
     
        <!-- HEADER START -->
        <header class="site-header header-style-1 mobile-sider-drawer-menu header-full-width">
            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">  
                                    
                    <div class="container clearfix"> 
                        <!--Logo section start-->
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="{{route('home')}}">
                                    <img class="logo-pic-one" src="{{asset('fontend/images/logo-light.png')}}" alt="">
                                    <img class="logo-pic-two" src="{{asset('fontend/images/logo-dark.png')}}" alt="">
                                </a>
                            </div>
                        </div>  
                        <!--Logo section End-->

                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button> 

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                            
                                                        <ul class=" nav navbar-nav">
                                <li class="has-child current-menu-item"><a href="{{url('/')}}">Home</a>
                                    
                                </li>
                        <li class="has-child"><a href="{{route('doctors')}}">All Doctors</a></li>
                                                                                       

                    <li class="has-child"><a href="{{route('about')}}">About us</a></li>

                              


                                <li class="has-child"><a href="{{route('All_Post')}}">Newsletter</a></li>
                                <li class="has-child"><a href="{{route('contact')}}">Contact</a>  </li> 
                            </ul>
                        </div>
                        
                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">
                            <div class="extra-cell">

                                <!--Sign up-->
                                <a href="login-page.html" class="site-button-link aon-btn-signup m-l20" >
                                    <i class="feather-user"></i> Sign up
                                </a>
                                <!--Add Listing up-->
                                <a href="reports.html" class="site-button aon-add-listing m-l20" >
                                    <i class="feather-plus-circle"></i> Add Listing
                                </a> </div>
                                
                            </div>                            
                    
                    </div>    
                
                </div>
            </div>
        </header>
        <!-- HEADER END -->
    
        <!-- CONTENT START -->
      @yield('home_content')
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="site-footer footer-light" >
            <!-- FOOTER NEWSLETTER START -->  
            <div class="footer-top-newsletter">
                <div class="container">
                    <div class="sf-news-letter">
                        <span>Subscribe Our Newsletter</span>
                        <form>
                            <div class="sf-news-l-form">
                                <input type="text" class="form-control" placeholder="Enter Your Email">
                                <button type="submit" class="sf-sb-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- COLUMNS 1 -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="sf-site-link sf-widget-link">
                                <h4 class="aon-f-title">About</h4>
                                <p>The printing and typesetting industry Ipsum has been the industry's thanks to your passion, hard work creativity</p>
                                <ul class="aon-socila-icon d-flex">
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="sf-site-link sf-widget-cities">
                                <h4 class="aon-f-title">Quick Links</h4>
                                <ul>
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="lab-test.html">Lab Test</a></li>
                                    <li><a href="medicince.html">Medicine</a></li>
                                    <li><a href="blog-list.html">Blog</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="sf-site-link sf-widget-categories">
                                <h4 class="aon-f-title">Quick Links</h4>
                                <ul>
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="lab-test.html">Lab Test</a></li>
                                    <li><a href="medicince.html">Medicine</a></li>
                                    <li><a href="blog-list.html">Blog</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="sf-site-link sf-widget-contact">
                                <h4 class="aon-f-title">Community</h4>
                                <ul>
                                    <li>Australia</li>
                                    <li>+41 232 525 5257</li>
                                    <li>+41 856 525 5369</li>
                                    <li>hello@Servicefinder.com</li>
                                    <li>hello@aontheme.com</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="aon-footer-bottom-area">
                    	<div class="aon-foo-copyright">
                        	<span>Copyright 2022 | Aone Theme. All Rights Reserved</span>
                        </div>
                    </div>
                </div>   
            </div>   
    
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

 	</div>

    
    
<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="{{asset('fontend/js/jquery-3.6.0.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script  src="{{asset('fontend/js/popper.min.js')}}"></script><!-- POPPER.MIN JS -->
<script  src="{{asset('fontend/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    
<script  src="{{asset('fontend/js/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script  src="{{asset('fontend/js/bootstrap-slider.min.js')}}"></script><!-- BOOTSTRAP Slider --> 
<script  src="{{asset('fontend/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{asset('fontend/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script  src="{{asset('fontend/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script  src="{{asset('fontend/js/waypoints-sticky.min.js')}}"></script><!-- STICKY HEADER -->
<script  src="{{asset('fontend/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->
<script  src="{{asset('fontend/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
<script  src="{{asset('fontend/js/slick.min.js')}}"></script><!-- Slick SLIDER  -->
<script  src="{{asset('fontend/js/theia-sticky-sidebar.js')}}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{asset('fontend/js/jquery.scrollbar.min.js')}}"></script><!-- MY ACCOUNT LEFT PANEL SCROLLER -->
<script  src="{{asset('fontend/js/dropzone.js')}}"></script><!--IMAGE UPLOAD-->  
<script  src="{{asset('fontend/js/bootstrap4-toggle.min.js')}}"></script><!-- BOOTSTRAP TOOGLE-->
<script  src="{{asset('fontend/js/jquery.dataTables.min.js')}}"></script><!--DATA TABLE-->
<script  src="{{asset('fontend/js/dataTables.bootstrap4.min.js')}}"></script><!-- DATA TABLE-->
<script  src="{{asset('fontend/js/lc_lightbox.lite.js')}}" ></script><!-- IMAGE POPUP -->
<script  src="{{asset('fontend/js/datepicker.min.js')}}"></script><!-- DATEPICKER -->
<script  src="{{asset('fontend/js/fullcalendar.min.js')}}"></script><!-- DATEPICKER -->
<script src="{{asset('fontend/js/recaptcha-api.js')}}"></script><!-- RECAPTCHA-->
<script  src="{{asset('fontend/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->




</body>

</html>




