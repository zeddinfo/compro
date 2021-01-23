<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hidayah Travel</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('Hidayah/')}}/assets/img/favicon.png" rel="icon">
    <link href="{{asset('Hidayah/')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('Hidayah/')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('Hidayah/')}}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{asset('Hidayah/')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('Hidayah/')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{asset('Hidayah/')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{asset('Hidayah/')}}/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{asset('Hidayah/')}}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('Hidayah/')}}/assets/css/style.css" rel="stylesheet">
</head>

<body>

    @include('layout.v_header')

    @include('layout.v_carousel')

    <main id="main">

        @include('layout.v_spcpromo')

        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="row">

                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>Product</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Car Hire</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>Branch</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Purwokerto</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Semarang</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Wonosobo</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 footer-contact">
                                <h4>Contact Us</h4>
                                <p>
                                    A108 Adam Street <br>
                                    New York, NY 535022<br>
                                    United States <br><br>
                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>

                            </div>

                            <div class="col-lg-3 col-md-6 footer-info">
                                <h3>About Hidayah Travel</h3>
                                <div class="social-links mt-3">
                                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Hidayah</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('Hidayah/')}}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('Hidayah/')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('Hidayah/')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{asset('Hidayah/')}}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{asset('Hidayah/')}}/assets/vendor/venobox/venobox.min.js"></script>
    <script src="{{asset('Hidayah/')}}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{asset('Hidayah/')}}/assets/vendor/counterup/counterup.min.js"></script>
    <script src="{{asset('Hidayah/')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{asset('Hidayah/')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('Hidayah/')}}/assets/js/main.js"></script>

</body>

</html>