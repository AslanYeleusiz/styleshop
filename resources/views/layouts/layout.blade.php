<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Toro - Minimal eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png')}}">

    <!-- All CSS is here
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/dlicon.css') }}">
    <!-- Others CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/easyzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fullpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
<body>
    <div class="main-wrapper">
        @include('components.header')
        @include('components.headerMini')
        @include('components.menuSideBar')


        <!-- aside start -->

        @yield('content')




        @include('components.footer')

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span class="dlicon ui-1_simple-remove" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-0">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-slider-active owl-carousel">
                                    <a class="img-popup" href="assets/images/product/quickview-1.jpg"><img src="assets/images/product/quickview-1.jpg" alt=""><span>sold uot</span></a>
                                    <a class="img-popup" href="assets/images/product/quickview-2.jpg"><img src="assets/images/product/quickview-2.jpg" alt=""><span>sold uot</span></a>
                                </div>
                                <!-- Thumbnail Large Image End -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="product-details-content">
                                    <div class="pro-dec-next-prev">
                                        <a class="prev" href="#"><i class="dlicon arrows-1_tail-left"></i></a>
                                        <a class="next" href="#"><i class="dlicon arrows-1_tail-right"></i></a>
                                    </div>
                                    <h2 class="uppercase">Quilted parka with hood</h2>
                                    <h3>$49.00</h3>
                                    <div class="product-details-peragraph">
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam libero ac turpis pharetra, in vehicula scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                    </div>
                                    <div class="product-details-action-wrap">
                                        <div class="product-details-quality">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                            </div>
                                        </div>
                                        <div class="product-details-cart">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                        <div class="product-details-wishlist">
                                            <a title="Add to wishlist" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                        <div class="product-details-compare">
                                            <a title="Add to compare" href="#"><i class="dlicon arrows-4_compare"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-details-info">
                                        <a href="#"><i class="dlicon location_pin"></i>Store availability</a>
                                        <a href="#"><i class="dlicon envir_car"></i>Delivery and return</a>
                                        <a href="#"><i class="dlicon design_measure-17"></i>Size Guide</a>
                                    </div>
                                    <div class="product-details-meta">
                                        <span>SKU: REF. LA-140</span>
                                        <span>Categories: <a href="#">Fashions</a>, <a href="#">Main 01</a>, <a href="#">Main 02</a></span>
                                        <span>Tags: <a href="#">Blazer</a>, <a href="#">chair</a>, <a href="#">Coat</a>, <a href="#">dress</a>, <a href="#">light</a>, <a href="#">Living</a>, <a href="#">Main 01</a></span>
                                    </div>
                                    <div class="social-icon-style-3">
                                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                        <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                                        <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </div>






    <!-- All JS is here
============================================ -->

    <!-- Modernizer JS -->
    <script src="{{ asset('js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <!-- jquery -->
    <script src="{{ asset('js/vendor/jquery-v3.6.0.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('js/vendor/popper.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/plugins/slick.js') }}"></script>
    <script src="{{ asset('js/plugins/jarallax.min.js') }}"></script>
    <script src="{{ asset('js/plugins/countdown.js') }}"></script>
    <script src="{{ asset('js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('js/plugins/instafeed.js') }}"></script>
    <script src="{{ asset('js/plugins/tilt.js') }}"></script>
    <script src="{{ asset('js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('js/plugins/scrolloverflow-fullpage.js') }}"></script>
    <script src="{{ asset('js/plugins/fullpage.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-ui-touch-punch.js') }}"></script>
    <script src="{{ asset('js/plugins/easyzoom.js') }}"></script>
    <script src="{{ asset('js/plugins/resizesensor.js') }}"></script>
    <script src="{{ asset('js/plugins/sticky-sidebar.js') }}"></script>
    <script src="{{ asset('js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('js/plugins/cookie.js') }}"></script>
    <script src="{{ asset('js/plugins/bpopup.js') }}"></script>
    <script src="{{ asset('js/plugins/wow.js') }}"></script>
    <script src="{{ asset('js/plugins/ajax-mail.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
