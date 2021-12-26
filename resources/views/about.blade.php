<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title> About Samahgram </title>

    <!-- Favicon -->
    {{-- <link rel="icon" href={{ asset('about/img/core-img/favicon.ico') }}> --}}

    <!-- Core Stylesheet -->
    <link href={{asset('about/style.css')}} rel="stylesheet">


    <!-- Responsive CSS -->
    <link href={{asset('about/css/responsive/responsive.css')}} rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src={{ asset('about/img/core-img/preload-1.png') }} alt="">
            <img class="preload-2" src={{ asset('about/img/core-img/preload-2.png') }} alt="">
            <img class="preload-3" src={{ asset('about/img/core-img/preload-3.png') }} alt="">
        </div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="caviar-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Favourite Dish ...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ****** Welcome Area Start ****** -->
    <section class="caviar-hero-area" id="home">
       
        <!-- Welcome Slides -->
        <div class="caviar-hero-slides owl-carousel">
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url({{ asset('about/img/bg-img/pexels-photo-769525.jpeg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>SAMAHGRAM</h2>
                                <p>Give people the power to build community and bring the world closer together.</p>
                                <!-- <a href="#" class="btn caviar-btn"><span></span> Reservation</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <div class="hero-slides-nav bg-img" style="background-image: url({{ asset('about/img/bg-img/pexels-photo-769525.jpeg') }});"></div>
            </div>
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url({{ asset('about/img/bg-img/pexels-photo-4551832.jpeg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>EXPLORE WHAT'S NEW </h2>
                                <p>Express yourself in new ways with the latest Samahgram features.</p>
                                <!-- <a href="#" class="btn caviar-btn"><span></span> Reservation</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <div class="hero-slides-nav bg-img" style="background-image: url({{ asset('about/img/bg-img/pexels-photo-4551832.jpeg') }});"></div>
            </div>
            <div class="single-hero-slides bg-img" style="background-image: url({{ asset('about/img/bg-img/pexels-photo-1329711.jpeg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>STAND OUT ON SAMAHAGRAM </h2>
                                <p>Connect with more people, build influence, and create compelling content that's distinctly yours.</p>
                                <!-- <a href="#" class="btn caviar-btn"><span></span> Reservation</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <div class="hero-slides-nav bg-img" style="background-image: url({{ asset('about/img/bg-img/pexels-photo-1329711.jpeg') }});"></div>
            </div>
        </div>
    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** About Us Area Start ****** -->
    <section class="caviar-about-us-area section-padding-150" id="about">
        <div class="container">
            <!-- About Us Single Area -->
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                        <img src={{ asset('about/img/bg-img/92461754_1616074511864359_323167001642008576_n.jpg') }} alt="">
                        
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 ml-md-auto">
                    <div class="section-heading">
                        <h2>About Us</h2>
                    </div>
                    <div class="about-us-content">
                        <p>Samahgram is an photo and video sharing social networking service . The app allows users to upload media that can be edited with filters and organized by hashtags and geographical tagging. Posts can be shared publicly or with pre-approved followers. Users can browse other users' content by tags and locations and view trending content. Users can like photos and follow other users to add their content to a personal feed.</p>
                    </div>
                </div>
            </div>
            <!-- About Us Single Area -->
            <div class="about-us-second-part">
                <div class="row align-items-center pt-200">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="about-us-content">
                            <h2>We bring you closer to the people and things you love</h2>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto">
                        <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                            <img src= {{ asset('about/img/bg-img/92250155_363740644525727_8308199172767481856_n.jpg') }} alt="">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <!-- ****** Dish Menu Area Start ****** -->
    <section class="caviar-dish-menu" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Our Service</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                        <img src={{ asset('about/img/service-img/2sev.jpeg') }} alt="">
                        
                        <div class="dish-info">
                            <h6 class="dish-name">upload photo and video </h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1s">
                        <img src={{ asset('about/img/service-img/4sev.jpeg') }} alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Users can like photos</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1.5s">
                        <img src={{ asset('about/img/service-img/3sev.jpeg') }} alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">users to add their content </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Dish Menu Area End ****** -->

    <!-- ****** Testimonials Area Start ****** -->

    <!-- ****** Footer Area Start ****** -->
    <!-- <footer class="caviar-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-text">
                        <a href="#" class="navbar-brand">caviar</a>
                        Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- ****** Footer Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <script src={{asset('about/js/jquery/jquery-2.2.4.min.js')}}></script>
    <!-- Popper js -->
    <script src={{asset('about/js/bootstrap/popper.min.js')}}></script>
    <!-- Bootstrap-4 js -->
    <script src={{ asset('about/js/bootstrap/bootstrap.min.js') }}></script>
    <!-- All Plugins js -->
    <script src={{ asset('about/js/others/plugins.js') }}></script>
    <!-- Active JS -->
    <script src={{ asset('about/js/active.js') }}></script>
</body>