<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GreeNusys Technology</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Agency Template" name="keywords">
        <meta content="Bootstrap Agency Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
       
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ url('/assets/lib/slick/slick.css')}}" rel="stylesheet">
        <link href="{{url('/assets/lib/slick/slick-theme.css')}}" rel="stylesheet">
        <link href="{{ url('/assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ url('/assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Header Start -->
            <div class="header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="brand">
                                <a href="index">
                                    <img src="{{url('/assets/img/logo.png')}}" alt="Logo">
                                   
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="topbar">
                                <div class="topbar-col">
                                    <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>+012 345 67890</a>
                                </div>
                                <div class="topbar-col">
                                    <a href="mailto:shubhambhattshubh@.com"><i class="fa fa-envelope"></i>GreeNusys Technology</a>
                                </div>
                                <div class="topbar-col">
                                    <div class="topbar-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <a href="#" class="navbar-brand">MENU</a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                        <a href="index" class="nav-item nav-link">Home</a>
                                        <a href="about" class="nav-item nav-link">About Us</a>
                                        <a href="service" class="nav-item nav-link">Services</a>
                                        <a href="portfolio" class="nav-item nav-link active">Portfolio</a>
                                        <a href="single" class="nav-item nav-link">Single Page</a>
                                        <a href="contact" class="nav-item nav-link">Contact Us</a>
                                        <!-- <a href="https://htmlcodex.com/bootstrap-agency-template" class="btn"><i class="fa fa-download"></i>Download Now</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
@yield('content')

             <!-- Call to Action Start -->
             <div class="call-to-action">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h2>Get A Free HTML Template</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet metus sit amet
                            </p>
                        </div>
                        <div class="col-md-3">
                            <a class="btn" href="contact">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to Action End -->


            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="footer-about">
                                <h2>About Us</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet metus sit amet diam varius commodo. Aliquam at nisl interdum
                                </p>
                                <br>
                                <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="footer-link">
                                        <h2>Useful Link</h2>
                                        <a href="">About Us</a>
                                        <a href="">Our Story</a>
                                        <a href="">Our Services</a>
                                        <a href="">Our Portfolio</a>
                                        <a href="">Our Projects</a>
                                        <a href="">Contact Us</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer-link">
                                        <h2>Useful Link</h2>
                                        <a href="">Our Clients</a>
                                        <a href="">Clients Review</a>
                                        <a href="">Ongoing Customer</a>
                                        <a href="">Customer Support</a>
                                        <a href="">FAQs</a>
                                        <a href="">Site Map</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">Shubham</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Template By <a href="#">Shubham </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src=" {{url('/assets/lib/slick/slick.min.js')}}"></script>
        <script src="{{url('/assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{ url('/assets/lib/lightbox/js/lightbox.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{url('/assets/js/main.js')}}"></script>
    </body>
</html>