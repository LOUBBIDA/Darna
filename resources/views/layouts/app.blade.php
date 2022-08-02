
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>HomListi | Home 01 </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Start Here -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('homlisti/img/favicon-homlisti.svg')}} ">
    <link rel="stylesheet" href="{{asset('homlisti/css/jquery-ui.css')}} ">
    <!-- Bootstrap Css Start Here -->
    <link rel="stylesheet" href="{{asset('homlisti/css/bootstrap.min.css')}} ">
    <!-- Animate Css Start Here -->
    <link rel="stylesheet" href="{{asset('homlisti/css/animate.min.css')}} ">
    <!-- Owl Carousel Start Here -->
    <link rel="stylesheet" href="{{asset('homlisti/vendor/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('homlisti/vendor/owlcarousel/owl.theme.default.min.css')}}">
    <!-- Swiper Css Start Here -->
    <link rel="stylesheet" href="{{asset('homlisti/css/swiper-bundle.min.css')}}">
    <!-- Flaticon Css Start Here -->
    <link rel="stylesheet" href="{{asset('homlisti/css/flaticon/font/flaticon.css')}}">
    <!-- Select Css Start Here -->
    <link rel="stylesheet" href="{{asset('homlisti/css/nice-select.css')}}">
    <!-- Animate Css Start Here -->
    <link rel="stylesheet" href="{{asset('homlisti/css/animate.min.css')}}">
    <!-- Pop Up Css Start Here -->
    <link rel="stylesheet" href="{{asset('homlisti/css/magnific-popup.css')}}">
    <!-- All min Css Start Here -->
    <link rel="stylesheet" href="{{asset('homlisti/css/all.min.css')}}">
    <!-- Pannellum -->
    <link rel="stylesheet" href="{{asset('homlisti/css/pannellum.css')}}">
    <!-- noUIrangle slider -->
    <link rel="stylesheet" href="{{asset('homlisti/vendor/noUiSlider/nouislider.min.css')}}">
    <!-- Style Css Start Here -->
    <link rel="stylesheet" href="{{asset('homlisti/style.css')}}">
    <!-- Google Font Start Here -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;family=Ubuntu:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&amp;display=swap" rel="stylesheet">

</head>

<body class="sticky-header">
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <!--=====================================-->
    <!--=   Preloader     Start             =-->
    <!--=====================================-->

    <div id="preloader"></div>
    <!--=====================================-->
    <!--=   Preloader     End               =-->
    <!--=====================================-->
    <div class="wrapper" id="wrapper">
    <!--=====================================-->
    <!--=   Header     Start             =-->
    <!--=====================================-->
    @include('layouts.menu')
    @yield('content')
    <!--=====================================-->
    <!--=   Footer     Start                =-->
    <!--=====================================-->

        <footer class="footer-area">
            <div class="footer-top footer-top-style">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-logo-area footer-logo-area-2">
                                <div class="item-logo">
                                    <img src="img/logo_light.svg" width="157" height="40" alt="logo" class="img-fluid">
                                </div>
                                <p>Corem ipsum dolor sit amet consecte turad
                                    pisicing elit, sed do eiusmod tempor inci
                                    didunt ut labore et dolor.pisicing elit, sed do eiusmod tempor inci
                                </p>
                                <div class="item-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://vimeo.com/" target="_blank"><i class="fab fa-vimeo-v"></i></a></li>
                                        <li><a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="https://web.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                            <div class="footer-link footer-link-style-2">
                                <div class="footer-title footer-title-style2">
                                    <h3>Quick Links</h3>
                                </div>
                                <div class="item-link">
                                    <ul>
                                        <li><a href="about-1.html">About Us </a></li>
                                        <li><a href="blog-details1.html">Blogs & Articles </a></li>
                                        <li><a href="about-1.html">Terms & Conditions</a></li>
                                        <li><a href="about-1.html">Privacy Policy </a></li>
                                        <li><a href="contact.html">Contact Us </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-insta">
                                <div class="footer-title footer-title-style2">
                                    <h3>Instagram</h3>
                                </div>
                                <div class="insta-link">
                                    <ul>
                                        <li>
                                            <div class="item-img">
                                                <a href="https://www.instagram.com/" class="insta-pic">
                                                    <img src="img/instagram/insta1.jpg" width="86" height="73"
                                                        alt="instagram">
                                                </a>
                                                <div class="item-overlay">
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-img">
                                                <a href="https://www.instagram.com/" class="insta-pic">
                                                    <img src="img/instagram/insta2.jpg" width="86" height="73"
                                                        alt="instagram">
                                                </a>
                                                <div class="item-overlay">
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-img">
                                                <a href="https://www.instagram.com/" class="insta-pic">
                                                    <img src="img/instagram/insta3.jpg" width="86" height="73"
                                                        alt="instagram">
                                                </a>
                                                <div class="item-overlay">
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-img">
                                                <a href="https://www.instagram.com/" class="insta-pic">
                                                    <img src="img/instagram/insta4.jpg" width="86" height="73"
                                                        alt="instagram">
                                                </a>
                                                <div class="item-overlay">
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-img">
                                                <a href="https://www.instagram.com/" class="insta-pic">
                                                    <img src="img/instagram/insta5.jpg" width="86" height="73"
                                                        alt="instagram">
                                                </a>
                                                <div class="item-overlay">
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-img">
                                                <a href="https://www.instagram.com/" class="insta-pic">
                                                    <img src="img/instagram/insta6.jpg" width="86" height="73"
                                                        alt="instagram">
                                                </a>
                                                <div class="item-overlay">
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-contact footer-contact-style-2">
                                <div class="footer-title footer-title-style2">
                                    <h3>Contact</h3>
                                </div>
                                <div class="footer-location">
                                    <ul>
                                        <li class="item-map"><i class="fas fa-map-marker-alt"></i>121 King St, Melbourne
                                            den
                                            3000, Australia</li>
                                        <li><a href="mailto:info@example.com"><i class="fas fa-envelope"></i>info@example.com</a></li>
                                        <li><a href="tel:+123596000"><i class="fas fa-phone-alt"></i>(+123) 596 000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom footer-bottom-style-2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-area1">
                                <ul>
                                    <li><a href="about-1.html">Terms of Use</a></li>
                                    <li><a href="about-1.html">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-area2">
                                <p>2022© All rightre served by RadiusTheme</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- start back to top -->
        <a href="javascript:void(0)" id="back-to-top">
            <i class="fas fa-angle-double-up"></i>
        </a>
        <!-- End back to top -->

    </div>
    <div id="template-search" class="template-search">
        <button type="button" class="close">×</button>
        <form class="search-form">
          <input type="search" value="" placeholder="Search" />
          <button type="submit" class="search-btn btn-ghost style-1">
            <i class="flaticon-search"></i>
          </button>
        </form>
    </div>

    <!-- Jquery Start Here -->
    <script src="{{asset('homlisti/js/jquery-3.6.0.min.js')}}"></script>
    <!-- Popper Js Start Here -->
    <script src="{{asset('homlisti/js/popper.min.js')}}"></script>
    <!-- Bootstrap Js Start Here -->
    <script src="{{asset('homlisti/js/bootstrap.min.js')}}"></script>



    <!-- Wow Js Start Here -->
    <script src="{{asset('homlisti/js/wow.min.js')}}"></script>
    <!-- Owl Carousel Js Start Here -->
    <script src="{{asset('homlisti/vendor/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('homlisti/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('homlisti/js/jquery.appear.min.js')}}"></script>
    <!-- Pop up Js Start Here -->
    <script src="{{asset('homlisti/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Nice Select Js Start Here -->
    <script src="{{asset('homlisti/js/jquery.nice-select.min.js')}}"></script>
    <!-- Parallaxie Js Start Here -->
    <script src="{{asset('homlisti/js/parallaxie.js')}}"></script>
    <!-- Tween Js Start Here -->
    <script src="{{asset('homlisti/js/tween-max.js')}}"></script>
    <!-- Appear Js Start Here -->
    <script src="{{asset('homlisti/js/appear.min.js')}}"></script>
    <!-- Isotope Js Start Here -->
    <script src="{{asset('homlisti/js/isotope.pkgd.min.js')}}"></script>
    <!-- Imagesloaded Js Start Here -->
    <script src="{{asset('homlisti/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- noUiRangeSlider -->
    <script src="{{asset('homlisti/vendor/noUiSlider/nouislider.min.js')}}"></script>
    <script src="{{asset('homlisti/vendor/noUiSlider/wNumb.js')}}"></script>
    <!-- Validator Slider -->
    <script src="{{asset('homlisti/js/validator.min.js')}}"></script>
    <!-- Pannellum  -->
    <script src="{{asset('homlisti/js/pannellum.js')}}"></script>
    <!-- Zoom Image  -->
    <script src="{{asset('homlisti/js/jquery.zoom.min.js')}}"></script>

    <!-- Main Js Start Here -->
    <script src="{{asset('homlisti/js/main.js')}}"></script>
</body>



</html>
