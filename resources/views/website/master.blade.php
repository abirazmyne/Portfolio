<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="viewport" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Abir Azmyne</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}website/assets/imgs/title-logo.jpg">



    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&amp;display=swap" rel="stylesheet">

    <!-- Font -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/satoshi.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/plugins.css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style.css">

</head>

<body class="crev-agency">



<!-- ==================== Start Loading ==================== -->

<div class="loader-wrap">
    <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
    </svg>

    <div class="loader-wrap-heading">
        <div class="load-text">
            <span>A</span>
            <span>B</span>
            <span>I</span>
            <span>R</span>
            <span> </span>
            <span>A</span>
            <span>Z</span>
            <span>M</span>
            <span>Y</span>
            <span>N</span>
            <span>E</span>
        </div>
    </div>
</div>

<!-- ==================== End Loading ==================== -->


{{--<div class="cursor"></div>--}}


{{--<!-- ==================== Start progress-scroll-button ==================== -->--}}

{{--<div class="progress-wrap cursor-pointer">--}}
{{--    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">--}}
{{--        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />--}}
{{--    </svg>--}}
{{--</div>--}}

{{--<!-- ==================== End progress-scroll-button ==================== -->--}}



<div id="smooth-wrapper">



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg bord blur">
        <div class="container">

            <!-- Logo -->
{{--            <a class="logo icon-img-100" href="#">--}}
{{--                <img src="{{asset('/')}}website/assets/imgs/logo-dark.png" alt="logo">--}}
{{--            </a>--}}

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Home</span></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item " href="home-main.html">Main Home</a>
                            <a class="dropdown-item" href="home-startup-onepage.html">Modern Startup</a>
                            <a class="dropdown-item" href="home-creative-agency.html">Creative Agency</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  text-white" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Portfolio</span></a>
                        <div class="dropdown-menu mega-menu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="clumn mb-80">
                                            <div class="title">
                                                <h6 class="sub-title ls1 pb-20 bord-thin-bottom">Portfolio Type</h6>
                                            </div>
                                            <div class="links row">
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="portfolio-standard.html">Standerd</a>
                                                    <a class="dropdown-item" href="portfolio-gallery.html">Gallery</a>
                                                    <a class="dropdown-item" href="portfolio-metro.html">Metro</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="portfolio-masonry.html">Masonry</a>
                                                    <a class="dropdown-item"
                                                       href="portfolio-caption-cursor.html">Caption
                                                        Cursor</a>
                                                    <a class="dropdown-item" href="portfolio-outline.html">Outline</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="portfolio-parallax.html">Parallax</a>
                                                    <a class="dropdown-item" href="portfolio-sticky.html">Sticky</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="clumn">
                                            <div class="title">
                                                <h6 class="sub-title ls1 pb-20 bord-thin-bottom">Showcases</h6>
                                            </div>
                                            <div class="links row">
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="showcase-fullscreen.html">Parallax
                                                        Slider</a>
                                                    <a class="dropdown-item" href="showcase-carousel.html">Showcase
                                                        Carousel</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="showcase-half-slider.html">Creative
                                                        Slider</a>
                                                    <a class="dropdown-item"
                                                       href="showcase-interactive-full.html">Interactive Full</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item"
                                                       href="showcase-interactive-center.html">Interactive Center</a>
                                                    <a class="dropdown-item"
                                                       href="showcase-interactive-vertical.html">Interactive
                                                        Vertical</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="clumn">
                                            <div class="title">
                                                <h6 class="sub-title ls1 pb-20 bord-thin-bottom">Portfolio Single</h6>
                                            </div>
                                            <div class="links row">
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="project1.html">project1</a>
                                                    <a class="dropdown-item" href="project2.html">project2</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="project3.html">project3</a>
                                                    <a class="dropdown-item" href="project4.html">project4</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a class="dropdown-item" href="project5.html">project5</a>
                                                    <a class="dropdown-item" href="project6.html">project6</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  text-white" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Pages</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="#0">About Us <i class="fas fa-angle-right icon-arrow"></i></a>
                                <ul class="dropdown-side">
                                    <li><a class="dropdown-item" href="page-about.html">About Us 1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="page-about2.html">About Us 2</a>
                                    </li>
                                    <li><a class="dropdown-item" href="page-about3.html">About Us 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-item">
                                <a href="#0">Services <i class="fas fa-angle-right icon-arrow"></i></a>
                                <ul class="dropdown-side">
                                    <li><a class="dropdown-item" href="page-services.html">Services 1</a></li>
                                    <li><a class="dropdown-item" href="page-services2.html">Services 2</a>
                                    </li>
                                    <li><a class="dropdown-item" href="page-services-details.html">Services
                                            Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-item">
                                <a href="#0">Contact Us <i class="fas fa-angle-right icon-arrow"></i></a>
                                <ul class="dropdown-side">
                                    <li><a class="dropdown-item" href="page-contact.html">Contact Us 1</a></li>
                                    <li><a class="dropdown-item" href="page-contact2.html">Contact Us 2</a>
                                    </li>
                                    <li><a class="dropdown-item" href="page-contact3.html">Contact Us 3</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="page-team.html">Our Team</a></li>
                            <li><a class="dropdown-item" href="page-team-single.html">Team Details</a></li>
                            <li><a class="dropdown-item" href="page-FAQS.html">FAQS</a></li>
                            <li><a class="dropdown-item" href="page-error404.html">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  text-white" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Blogs</span></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="blog-classic.html">Blog Standerd</a>
                            <a class="dropdown-item" href="blog-list.html">Blog List</a>
                            <a class="dropdown-item" href="blog-list2.html">Blog List 2</a>
                            <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="{{route('mycontact')}}"><span class="rolling-text">Contact Us</span></a>
                    </li>
                </ul>
            </div>

{{--            <div class="search-form">--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="search" placeholder="Search">--}}
{{--                    <button><span class="pe-7s-search"></span></button>--}}
{{--                </div>--}}
{{--                <div class="search-icon">--}}
{{--                    <span class="pe-7s-search open-search"></span>--}}
{{--                    <span class="pe-7s-close close-search"></span>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="topnav hovertext">
                <div class="menu-icon  ">
                    <span class="icon  text-white"><i class="fa-solid fa-bars "></i></span>
                </div>
            </div>
        </div>
    </nav>




    <div class="hamenu ">
{{--        <div class="logo icon-img-100">--}}
{{--            <img src="{{asset('/')}}website/assets/imgs/logo-dark.png" alt="">--}}
{{--        </div>--}}
        <div class="close-menu cursor-pointer ti-close"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="menu-text">
                        <div class="text">
                            <h2>putul</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="menu-links">
                        <ul class="main-menu rest">
                            <li>
                                <div class="o-hidden">
                                    <div class="link cursor-pointer dmenu"><span class="fill-text">Home</span> <i></i></div>
                                </div>
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <a href="home-main.html" class="sub-link">Main Home</a>
                                        </li>
                                        <li>
                                            <a href="home-startup-onepage.html" class="sub-link">Modern Startup</a>
                                        </li>
                                        <li>
                                            <a href="home-creative-agency.html" class="sub-link">Creative Agency</a>
                                        </li>
                                        <li>
                                            <a href="home-modern-agency.html" class="sub-link">Modern Agency</a>
                                        </li>
                                        <li>
                                            <a href="home-creative-portfolio.html" class="sub-link">Creative
                                                Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="home-digital-agency.html" class="sub-link">Digital Agency</a>
                                        </li>
                                        <li>
                                            <a href="home-freelancer.html" class="sub-link">Freelancer</a>
                                        </li>
                                        <li>
                                            <a href="home-personal-vcard.html" class="sub-link">Personal vCard</a>
                                        </li>
                                        <li>
                                            <a href="home-minimal-portfolio.html" class="sub-link">Minimal Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="home-asymmetric-portfolio.html" class="sub-link">Asymmetric
                                                Portfolio</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="o-hidden">
                                    <div class="link cursor-pointer dmenu"><span class="fill-text"
                                                                                 data-text="Pages">Pages</span> <i></i>
                                    </div>
                                </div>
                                <div class="sub-menu no-bord">
                                    <ul>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                                                                 data-text="About Us">About Us</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="page-about.html" class="sub-link">About Us v1</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-about2.html" class="sub-link">About Us v2</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-about3.html" class="sub-link">About Us v3</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                                                                 data-text="Services">Services</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="page-services.html" class="sub-link">Services v1</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-services2.html" class="sub-link">Services v2</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-services-details.html" class="sub-link">Services
                                                            Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                                                                 data-text="Contact">Contact</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="page-contact.html" class="sub-link">Contact v1</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-contact2.html" class="sub-link">Contact v2</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-contact3.html" class="sub-link">Contact v3</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                                                                 data-text="Team">Team</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="page-team.html" class="sub-link">Our Team</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-team-single.html" class="sub-link">Team
                                                            Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                                                                 data-text="Others">Others</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="page-FAQS.html" class="sub-link">FAQS</a>
                                                    </li>
                                                    <li>
                                                        <a href="page-error404.html" class="sub-link">Error 404</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="o-hidden">
                                    <div class="link cursor-pointer dmenu"><span class="fill-text"
                                                                                 data-text="Portfolio">Portfolio</span> <i></i>
                                    </div>
                                </div>
                                <div class="sub-menu no-bord">
                                    <ul>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                                                                 data-text="Portfolio Type">Portfolio Type</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="portfolio-standard.html" class="sub-link">Standerd</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-gallery.html" class="sub-link">Gallery</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-metro.html" class="sub-link">Metro</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-masonry.html" class="sub-link">Masonry</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-caption-cursor.html" class="sub-link">Caption
                                                            Cursor</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-outline.html" class="sub-link">Outline</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-parallax.html" class="sub-link">Parallax</a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-sticky.html" class="sub-link">Sticky</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                                                                 data-text="Showcases">Showcases</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="showcase-fullscreen.html" class="sub-link">Parallax
                                                            Slider</a>
                                                    </li>
                                                    <li>
                                                        <a href="showcase-carousel.html" class="sub-link">Showcase
                                                            Carousel</a>
                                                    </li>
                                                    <li>
                                                        <a href="showcase-half-slider.html" class="sub-link">Creative
                                                            Slider</a>
                                                    </li>
                                                    <li>
                                                        <a href="showcase-interactive-full.html"
                                                           class="sub-link">Interactive
                                                            Full</a>
                                                    </li>
                                                    <li>
                                                        <a href="showcase-interactive-center.html"
                                                           class="sub-link">Interactive
                                                            Center</a>
                                                    </li>
                                                    <li>
                                                        <a href="showcase-interactive-vertical.html"
                                                           class="sub-link">Interactive Vertical</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <div class="link cursor-pointer sub-dmenu"><span class="fill-text"
                                                                                                 data-text="Portfolio Single">Portfolio Single</span> <i></i>
                                                </div>
                                            </div>
                                            <div class="sub-menu2">
                                                <ul>
                                                    <li>
                                                        <a href="project1.html" class="sub-link">project1</a>
                                                    </li>
                                                    <li>
                                                        <a href="project2.html" class="sub-link">project2</a>
                                                    </li>
                                                    <li>
                                                        <a href="project3.html" class="sub-link">project3</a>
                                                    </li>
                                                    <li>
                                                        <a href="project4.html" class="sub-link">project4</a>
                                                    </li>
                                                    <li>
                                                        <a href="project5.html" class="sub-link">project5</a>
                                                    </li>
                                                    <li>
                                                        <a href="project6.html" class="sub-link">project6</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="o-hidden">
                                    <div class="link cursor-pointer dmenu"><span class="fill-text"
                                                                                 data-text="Blogs">Blogs</span> <i></i>
                                    </div>
                                </div>
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <a class="sub-link" href="blog-classic.html">Standard</a>
                                        </li>
                                        <li>
                                            <a class="sub-link" href="blog-list.html">Blog List</a>
                                        </li>
                                        <li>
                                            <a class="sub-link" href="blog-list2.html">Blog List 2</a>
                                        </li>
                                        <li>
                                            <a class="sub-link" href="blog-details.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="o-hidden">
                                    <a href="page-contact3.html" class="link">
                                        <span class="fill-text" data-text="Contact Us">Contact Us</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cont-info">
                        <div class="item mb-50">
                            <h6 class="sub-title mb-15 opacity-7">Address</h6>
                            <h5>Dhaka 1216, Mirpur <br>
                                <hr>
                            </h5>
                        </div>
                        <div class="item mb-50">
                            <h6 class="sub-title mb-15 opacity-7">Social Media</h6>
                            <ul class="rest social-text">
                                <li class="mb-10">
                                    <a href="https://www.facebook.com/abir.azmyne" class="hover-this"><span class="hover-anim">Facebook</span></a>
                                </li>
                                <li class="mb-10">
                                    <a href="https://github.com/abirazmyne" class="hover-this"><span class="hover-anim">Github</span></a>
                                </li>
{{--                                <li class="mb-10">--}}
{{--                                    <a href="https://twitter.com/AzmyneAbir" class="hover-this"><span class="hover-anim">Twitter</span></a>--}}
{{--                                </li>--}}
                                <li class="mb-10">
                                    <a href="https://www.linkedin.com/in/abir-azmyne/" class="hover-this"><span class="hover-anim">LinkedIn</span></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/abirazmyne" class="hover-this"><span class="hover-anim">Instagram</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="item mb-40">
                            <h6 class="sub-title mb-15 opacity-7">Contact </h6>
                            <h5><a href="#0">abirazmyne0011@gmail.com</a></h5>
                            <h5 class="underline mt-10"><a href="#0">+880 1797306861</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== End Navbar ==================== -->



    <div id="smooth-content">

       @yield('body')


        <!-- ==================== Start Footer ==================== -->

        <footer class="clean-footer crev bg-img " data-background="{{asset('/')}}website/assets/imgs/header/bg1.jpg"
                data-overlay-dark="10">
            <div class="container pb-40 section-padding ontop">
               <div class="row">
                   <div class=" col-md-8 call-action mb-2">
                       <h2 class="d-slideup wow fz-60 fw-600">
                        <span class="sideup-text">
                            <span class="up-text">Have project in mind ?</span>
                        </span>
                           <span class="sideup-text">
                            <span class="up-text underline">
                                <a href="page-contact3.html" class="main-color">Let’s talk & get to work.</a>
                            </span>
                        </span>
                       </h2>
                   </div>

                   <div class="col-md-4">

                   </div>
               </div>
                <hr>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo icon-img-100">
                            <h1>Abir Azmyne</h1>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="column">
                            <div class="mb-40">
                                <h6 class="sub-title mb-30">Address</h6>
                                <h5 class="opacity-8">Dhaka <br> Mirpur 1216, Shenpara</h5>
                            </div>

                            <a href="#0" class="underline">
                                <span class="fz-22 main-color">+880 1797306861</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1">
                        <div class="column">
                            <h6 class="sub-title mb-30">Useful Links</h6>
                            <ul class="rest fz-14">
                                <li class="mb-15">
                                    <a href="page-about.html">About</a>
                                </li>
                                <li class="mb-15">
                                    <a href="page-services.html">Services</a>
                                </li>
                                <li class="mb-15">
                                    <a href="blog-list2.html">Blog</a>
                                </li>
                                <li>
                                    <a href="page-contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="column">
                            <h6 class="sub-title mb-30">Support</h6>
                            <ul class="rest fz-14">
                                <li class="mb-15">
                                    <a href="page-FAQS.html">FAQS</a>
                                </li>
                                <li class="mb-15">
                                    <a href="page-about.html">Term & Conditions</a>
                                </li>
                                <li class="mb-15">
                                    <a href="page-about.html">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="page-about.html">Help</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center pt-30 pb-30 mt-80 bord-thin-top">
                    <div>
                        <ul class="rest d-flex align-items-center">
                            <li class="hover-this cursor-pointer">
                                <a href="#0" class="hover-anim">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="hover-this cursor-pointer ml-30">
                                <a href="#0" class="hover-anim">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                            <li class="hover-this cursor-pointer ml-30">
                                <a href="#0" class="hover-anim">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li class="hover-this cursor-pointer ml-30">
                                <a href="#0" class="hover-anim">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="ml-auto">
                        <p class="fz-14">© 2024 Proudly Powered by <span class="underline main-color"><a href="https://www.linkedin.com/in/abir-azmyne/"
                                    target="_blank">Abir Azmyne</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- ==================== End Footer ==================== -->


    </div>

</div>










<!-- jQuery -->
<script src="{{asset('/')}}website/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery-migrate-3.4.0.min.js"></script>

<!-- plugins -->
<script src="{{asset('/')}}website/assets/js/plugins.js"></script>

<script src="{{asset('/')}}website/assets/js/gsap.min.js"></script>
<script src="{{asset('/')}}website/assets/js/ScrollSmoother.min.js"></script>
<script src="{{asset('/')}}website/assets/js/ScrollTrigger.min.js"></script>
<script src="{{asset('/')}}website/assets/js/smoother-script.js"></script>

<!-- custom scripts -->
<script src="{{asset('/')}}website/assets/js/scripts.js"></script>
<!-- Bootstrap  scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
