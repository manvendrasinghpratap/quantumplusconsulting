<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Eazyrecruitz - HTML 5 Template Preview</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('public/assets/frontend/images/favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/font-awesome-all.css') }}">
    <link href="{{ asset('public/assets/frontend/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/frontend/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/frontend/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/frontend/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/frontend/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/frontend/css/responsive.css') }}" rel="stylesheet">

</head>
<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>


        <!-- search-popup -->
        <div id="search-popup" class="search-popup">
            <div class="close-search"><i class="flaticon-close"></i></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value=""
                                    placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn style-four">
                            </fieldset>
                        </div>
                    </form>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="index.html">Finance</a></li>
                        <li><a href="index.html">Idea</a></li>
                        <li><a href="index.html">Service</a></li>
                        <li><a href="index.html">Growth</a></li>
                        <li><a href="index.html">Plan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search-popup end -->


        <!-- main header -->
        <header class="main-header">
            <div class="header-top">
                <div class="top-inner">
                    <ul class="left-info">
                        <li>
                            <i class="flaticon-phone-call"></i>
                            <p><span>call: </span><a href="tel:8004561234">(800) 456-1234</a></p>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <p><span>Mail: </span><a href="mailto:info@example.com">info@example.com</a></p>
                        </li>
                    </ul>
                    <div class="location-box">
                        <div class="location-carousel owl-carousel owl-theme owl-dots-none">
                            <p><span>Recent:</span> Business Development Manager, San Fransisco, CA.</p>
                            <p><span>Recent:</span> Business Development Manager, Landon, UK.</p>
                            <p><span>Recent:</span> Business Development Manager, New York.</p>
                        </div>
                        <div class="apply-btn"><a href="index.html">Apply Online<i
                                    class="flaticon-arrow-pointing-to-right"></i></a></div>
                    </div>
                    <div class="right-info">
                        <ul class="list">
                            <li><a href="index.html">About Us</a></li>
                            <li><a href="index.html">Locations</a></li>
                            <li><a href="index.html">Resources</a></li>
                        </ul>
                        <ul class="social-links">
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-lower">
                <div class="outer-box clearfix">
                    <div class="menu-area pull-left clearfix">
                        <figure class="logo-box"><a href="index.html"><img src="{{ asset('public/assets/frontend/images/logo.png')}}"
                                    alt=""></a></figure>
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home Page 01</a></li>
                                            <li><a href="index-2.html">Home Page 02</a></li>
                                            <li><a href="index-3.html">Home Page 03</a></li>
                                            <li><a href="index-rtl.html">Home RTL</a></li>
                                            <li><a href="index-onepage.html">Home OnePage</a></li>
                                            <li class="dropdown"><a href="index.html">Header Style</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style 01</a></li>
                                                    <li><a href="index-2.html">Header Style 02</a></li>
                                                    <li><a href="index-3.html">Header Style 03</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index.html">About</a>
                                        <ul>
                                            <li><a href="about.html">About Company</a></li>
                                            <li><a href="team.html">Meet Our Team</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index.html">Employers</a>
                                        <ul>
                                            <li><a href="overview.html">Overview</a></li>
                                            <li><a href="place-job.html">Place Job Order</a></li>
                                            <li><a href="faq.html">FAQ’s</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index.html">Solutions</a>
                                        <ul>
                                            <li><a href="service.html">Our Solutions</a></li>
                                            <li><a href="temprory-staffing.html">Temprory Staffing</a></li>
                                            <li><a href="direct-hire.html">Direct Hire</a></li>
                                            <li><a href="contract-hire.html">Contract to Hire</a></li>
                                            <li><a href="payrolling.html">Payrolling</a></li>
                                            <li><a href="training.html">Training</a></li>
                                            <li><a href="executive-search.html">Executive Search</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index.html">Job Seekers</a>
                                        <ul>
                                            <li><a href="overview-2.html">Overview</a></li>
                                            <li class="dropdown"><a href="index.html">Job Openings</a>
                                                <ul>
                                                    <li><a href="job-openings.html">Job Openings</a></li>
                                                    <li><a href="job-details.html">Detail Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="apply-now.html">Apply Now</a></li>
                                            <li><a href="faq.html">FAQ’s</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index.html">Pages</a>
                                        <ul>
                                            <li class="dropdown"><a href="index.html">Blog</a>
                                                <ul>
                                                    <li><a href="blog-grid.html">Grid View</a></li>
                                                    <li><a href="blog-list.html">List View</a></li>
                                                    <li><a href="blog-details.html">Single Post</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="index.html">Portfolio</a>
                                                <ul>
                                                    <li><a href="portfolio-1.html">Grid View 01</a></li>
                                                    <li><a href="portfolio-2.html">Grid View 02</a></li>
                                                    <li><a href="portfolio-3.html">Masonry View</a></li>
                                                    <li><a href="portfolio-4.html">Fullwidth View 01</a></li>
                                                    <li><a href="portfolio-5.html">Fullwidth View 02</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="error.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index.html">Elements</a>
                                        <div class="megamenu">
                                            <div class="row clearfix">
                                                <div class="col-lg-4 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Elements 1</h4>
                                                        </li>
                                                        <li><a href="about-element-1.html">About Block 01</a></li>
                                                        <li><a href="about-element-2.html">About Block 02</a></li>
                                                        <li><a href="about-element-3.html">About Block 03</a></li>
                                                        <li><a href="about-element-4.html">About Block 04</a></li>
                                                        <li><a href="service-element-1.html">Service Block 01</a></li>
                                                        <li><a href="service-element-2.html">Service Block 02</a></li>
                                                        <li><a href="team-element-1.html">Team Block 01</a></li>
                                                        <li><a href="team-element-2.html">Team Block 02</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Elements 2</h4>
                                                        </li>
                                                        <li><a href="process-element-1.html">Process Block 01</a></li>
                                                        <li><a href="process-element-2.html">Process Block 02</a></li>
                                                        <li><a href="news-element-1.html">News Block 01</a></li>
                                                        <li><a href="news-element-2.html">News Block 02</a></li>
                                                        <li><a href="choose-element-1.html">Choose Block 01</a></li>
                                                        <li><a href="choose-element-2.html">Choose Block 02</a></li>
                                                        <li><a href="project-element-1.html">Project Block 01</a></li>
                                                        <li><a href="project-element-2.html">Project Block 02</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Elements 3</h4>
                                                        </li>
                                                        <li><a href="recruitment-element.html">Recruitment Block</a>
                                                        </li>
                                                        <li><a href="experience-element.html">Experience Block</a></li>
                                                        <li><a href="award-element.html">Award Block</a></li>
                                                        <li><a href="clients-element.html">Clients Block</a></li>
                                                        <li><a href="video-element.html">Video Block</a></li>
                                                        <li><a href="funfact-element.html">Funfact Block</a></li>
                                                        <li><a href="faq-element.html">Faq Block</a></li>
                                                        <li><a href="contact-form.html">Contact Form</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <ul class="menu-right-content pull-right clearfix">
                        <li>
                            <div class="search-btn">
                                <button type="button" class="search-toggler"><i
                                        class="flaticon-loupe-1"></i></button>
                            </div>
                        </li>
                        <li>
                            <div class="language">
                                <div class="lang-btn">
                                    <i class="icon flaticon-planet-earth"></i>
                                    <span class="txt">EN</span>
                                    <span class="arrow fa fa-angle-down"></span>
                                </div>
                                <div class="lang-dropdown">
                                    <ul>
                                        <li><a href="index.html">German</a></li>
                                        <li><a href="index.html">Italian</a></li>
                                        <li><a href="index.html">Chinese</a></li>
                                        <li><a href="index.html">Russian</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="index.html" class="theme-btn-one">Appointment</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box clearfix">
                    <div class="menu-area pull-left">
                        <figure class="logo-box"><a href="index.html"><img src="{{ asset('public/assets/frontend/images/small-logo.png')}}"
                                    alt=""></a></figure>
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <ul class="menu-right-content pull-right clearfix">
                        <li>
                            <div class="search-btn">
                                <button type="button" class="search-toggler"><i
                                        class="flaticon-loupe-1"></i></button>
                            </div>
                        </li>
                        <li>
                            <div class="language">
                                <div class="lang-btn">
                                    <i class="icon flaticon-planet-earth"></i>
                                    <span class="txt">EN</span>
                                    <span class="arrow fa fa-angle-down"></span>
                                </div>
                                <div class="lang-dropdown">
                                    <ul>
                                        <li><a href="index.html">German</a></li>
                                        <li><a href="index.html">Italian</a></li>
                                        <li><a href="index.html">Chinese</a></li>
                                        <li><a href="index.html">Russian</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="index.html" class="theme-btn-one">Appointment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('public/assets/frontend/images/logo-2.png')}}" alt=""
                            title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- banner-section -->
        <section class="banner-section style-one">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
                <div class="slide-item style-one">
                    <div class="image-layer" style="background-image:url({{ asset('public/assets/frontend/images/banner/banner-1.jpg')}})"></div>
                    <div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-1.png')}});">
                        </div>
                        <div class="pattern-2" style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-2.png')}});">
                        </div>
                    </div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                                <div class="content-box">
                                    <span>Engaged with Staffing</span>
                                    <h1>Partnering <br />You for Your <br />Human Resource Require.</h1>
                                    <p>By way of us you can achieve what you want.</p>
                                    <div class="btn-box">
                                        <a href="index.html" class="theme-btn-two">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item style-two">
                    <div class="image-layer" style="background-image:url({{ asset('public/assets/frontend/images/banner/banner-2.jpg')}})"></div>
                    <div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-3.png')}});">
                        </div>
                        <div class="pattern-2" style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-4.png')}});">
                        </div>
                    </div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                                <div class="content-box">
                                    <span>Engaged with Staffing</span>
                                    <h1>Shining a Light on Your HR <br />and Employment Law Issues</h1>
                                    <p>By way of us you can achieve what you want.</p>
                                    <div class="btn-box">
                                        <a href="index.html" class="theme-btn-two">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item style-one">
                    <div class="image-layer" style="background-image:url({{ asset('public/assets/frontend/images/banner/banner-3.jpg')}})"></div>
                    <div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-1.png')}});">
                        </div>
                        <div class="pattern-2" style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-2.png')}});">
                        </div>
                    </div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-xl-7 col-lg-12 col-md-12 content-column">
                                <div class="content-box">
                                    <span>Engaged with Staffing</span>
                                    <h1>Eazy Recruitz <br />Provide Employment Opportunities</h1>
                                    <p>By way of us you can achieve what you want.</p>
                                    <div class="btn-box">
                                        <a href="index.html" class="theme-btn-two">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- clients-section -->
        <section class="clients-section">
            <div class="outer-container">
                <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <figure class="clients-logo-box">
                        <a href="index.html"><img src="{{ asset('public/assets/frontend/images/clients/clients-logo-1.png')}}" alt=""></a>
                        <span class="logo-title"><a href="index.html">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index.html"><img src="{{ asset('public/assets/frontend/images/clients/clients-logo-2.png')}}" alt=""></a>
                        <span class="logo-title"><a href="index.html">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index.html"><img src="{{ asset('public/assets/frontend/images/clients/clients-logo-3.png')}}" alt=""></a>
                        <span class="logo-title"><a href="index.html">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index.html"><img src="{{ asset('public/assets/frontend/images/clients/clients-logo-4.png')}}" alt=""></a>
                        <span class="logo-title"><a href="index.html">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index.html"><img src="{{ asset('public/assets/frontend/images/clients/clients-logo-5.png')}}" alt=""></a>
                        <span class="logo-title"><a href="index.html">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index.html"><img src="{{ asset('public/assets/frontend/images/clients/clients-logo-6.png')}}" alt=""></a>
                        <span class="logo-title"><a href="index.html">Visit Website</a></span>
                    </figure>
                </div>
            </div>
        </section>
        <!-- clients-section end -->


        <!-- welcome-section -->
        <section class="welcome-section">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="top-title">Welcome to Eazy Recruitz</span>
                    <h2>Modern Day Staffing Agency</h2>
                    <p>Long established fact that a reader will be distracted by the <br />readable content of a page.
                    </p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <figure class="image-box js-tilt"><img src="{{ asset('public/assets/frontend/images/resource/welcome-1.png')}}"
                                alt=""></figure>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div id="content_block_1">
                            <div class="content-box">
                                <div class="tabs-box">
                                    <div class="tab-btn-box">
                                        <ul class="tab-btns tab-buttons clearfix">
                                            <li class="tab-btn active-btn" data-tab="#tab-1">
                                                <i class="employ-icon flaticon-businessman"></i>
                                                <h5>For Employers</h5>
                                                <i class="arrow-icon flaticon-up-arrow-2"></i>
                                            </li>
                                            <li class="tab-btn" data-tab="#tab-2">
                                                <i class="employ-icon flaticon-employer"></i>
                                                <h5>For Employees</h5>
                                                <i class="arrow-icon flaticon-up-arrow-2"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tabs-content">
                                        <div class="tab active-tab" id="tab-1">
                                            <div class="inner-box">
                                                <h5>Find the Employees</h5>
                                                <h2>Hire Your Next Candidate On Eazy Recruitz</h2>
                                                <p>To take a trivial example which of us ever undertakes laborious
                                                    physical exercise except to obtain some advantage from it but who
                                                    has any right to find fault with a man who chooses.</p>
                                                <ul class="list clearfix">
                                                    <li>
                                                        <figure class="icon-box"><img
                                                                src="{{ asset('public/assets/frontend/images/icons/icon-1.png')}}" alt="">
                                                        </figure>
                                                        <h4>Understand Your Needs</h4>
                                                    </li>
                                                    <li>
                                                        <figure class="icon-box"><img
                                                                src="{{ asset('public/assets/frontend/images/icons/icon-2.png')}}" alt="">
                                                        </figure>
                                                        <h4>Find the Perfect Candidate</h4>
                                                    </li>
                                                </ul>
                                                <div class="link"><a href="index.html"><i
                                                            class="flaticon-right-arrow"></i>Your Required Talent</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab" id="tab-2">
                                            <div class="inner-box">
                                                <h5>Find Your Right Place</h5>
                                                <h2>Explore Your Career Path With Eazy Recruitz</h2>
                                                <p>Explain to you how all this mistaken idea of denouncing pleasure and
                                                    praising pain was born and we will give you a complete account of
                                                    the system, and expound the actual teachings.</p>
                                                <ul class="list clearfix">
                                                    <li>
                                                        <figure class="icon-box"><img
                                                                src="{{ asset('public/assets/frontend/images/icons/icon-71.png')}}" alt="">
                                                        </figure>
                                                        <h4>Executive Opportunities</h4>
                                                    </li>
                                                    <li>
                                                        <figure class="icon-box"><img
                                                                src="{{ asset('public/assets/frontend/images/icons/icon-72.png')}}" alt="">
                                                        </figure>
                                                        <h4>Non Excecutive Opportunities</h4>
                                                    </li>
                                                </ul>
                                                <div class="link"><a href="index.html"><i
                                                            class="flaticon-right-arrow"></i>Your Required Talent</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- welcome-section end -->


        <!-- about-section -->
        <section class="about-section">
            <div class="pattern-layer" style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-5.png')}});"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div id="content_block_2">
                                <div class="content-box centred">
                                    <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/resource/about-1.jpg')}}"
                                            alt=""></figure>
                                    <div class="inner-box">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-3.png')}}"
                                                alt=""></figure>
                                        <h3>Educational Resources <br />for Job Seekers</h3>
                                        <a href="index.html">Guides & E-books<i
                                                class="flaticon-direct-download"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div id="content_block_3">
                                <div class="content-box">
                                    <div class="sec-title">
                                        <span class="top-title">About Our Agency</span>
                                        <h2>Staffing Partners: Reliable & Cost Efficiant Recruitment Agency</h2>
                                    </div>
                                    <div class="text">
                                        <p>Long established fact that reader will be distracted the readable of pages
                                            when looking at its layout. The point using lorem ipsum has a more-or-less
                                            normal distribution of letters.</p>
                                    </div>
                                    <div class="link"><a href="index.html"><i class="flaticon-right-arrow"></i>More
                                            About Us</a></div>
                                    <div class="author-box">
                                        <div class="author-text">
                                            <h3>Pathway for both employer and employee.</h3>
                                        </div>
                                        <div class="author-info">
                                            <figure class="author-thumb"><img
                                                    src="{{ asset('public/assets/frontend/images/resource/author-1.png')}}" alt=""></figure>
                                            <h4>Daniel Primera</h4>
                                            <span class="designation">Founder</span>
                                            <figure class="signature"><img src="{{ asset('public/assets/frontend/images/icons/signature-1.png')}}"
                                                    alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- service-section -->
        <section class="service-section">
            <div class="pattern-layer" style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-6.png')}});"></div>
            <div class="anim-icon">
                <div class="icon-1" style="background-image: url({{ asset('public/assets/frontend/images/icons/anim-icon-1.png')}});"></div>
                <div class="icon-2"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="top-title">Solutions We Provide</span>
                    <h2>Inspiring Staffing Solutions</h2>
                    <p>Long established fact that a reader will be distracted by the <br />readable content of a page.
                    </p>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/service/service-1.jpg')}}" alt="">
                            </figure>
                            <div class="lower-content">
                                <div class="content-box">
                                    <div class="inner">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-4.png')}}"
                                                alt=""></figure>
                                        <h4>Temporary</h4>
                                    </div>
                                    <div class="link"><a href="temprory-staffing.html">More Details</a></div>
                                </div>
                                <div class="overlay-content">
                                    <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                    <a href="temprory-staffing.html"><i class="flaticon-right-arrow"></i>More
                                        details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/service/service-2.jpg')}}" alt="">
                            </figure>
                            <div class="lower-content">
                                <div class="content-box">
                                    <div class="inner">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-5.png')}}"
                                                alt=""></figure>
                                        <h4>Direct Hire</h4>
                                    </div>
                                    <div class="link"><a href="direct-hire.html">More Details</a></div>
                                </div>
                                <div class="overlay-content">
                                    <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                    <a href="direct-hire.html"><i class="flaticon-right-arrow"></i>More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/service/service-3.jpg')}}" alt="">
                            </figure>
                            <div class="lower-content">
                                <div class="content-box">
                                    <div class="inner">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-6.png')}}"
                                                alt=""></figure>
                                        <h4>Contract</h4>
                                    </div>
                                    <div class="link"><a href="contract-hire.html">More Details</a></div>
                                </div>
                                <div class="overlay-content">
                                    <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                    <a href="contract-hire.html"><i class="flaticon-right-arrow"></i>More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/service/service-1.jpg')}}" alt="">
                            </figure>
                            <div class="lower-content">
                                <div class="content-box">
                                    <div class="inner">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-4.png')}}"
                                                alt=""></figure>
                                        <h4>Temporary</h4>
                                    </div>
                                    <div class="link"><a href="temprory-staffing.html">More Details</a></div>
                                </div>
                                <div class="overlay-content">
                                    <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                    <a href="temprory-staffing.html"><i class="flaticon-right-arrow"></i>More
                                        details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/service/service-2.jpg')}}" alt="">
                            </figure>
                            <div class="lower-content">
                                <div class="content-box">
                                    <div class="inner">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-5.png')}}"
                                                alt=""></figure>
                                        <h4>Direct Hire</h4>
                                    </div>
                                    <div class="link"><a href="direct-hire.html">More Details</a></div>
                                </div>
                                <div class="overlay-content">
                                    <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                    <a href="direct-hire.html"><i class="flaticon-right-arrow"></i>More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/service/service-3.jpg')}}" alt="">
                            </figure>
                            <div class="lower-content">
                                <div class="content-box">
                                    <div class="inner">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-6.png')}}"
                                                alt=""></figure>
                                        <h4>Contract</h4>
                                    </div>
                                    <div class="link"><a href="contract-hire.html">More Details</a></div>
                                </div>
                                <div class="overlay-content">
                                    <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                    <a href="contract-hire.html"><i class="flaticon-right-arrow"></i>More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/service/service-1.jpg')}}" alt="">
                            </figure>
                            <div class="lower-content">
                                <div class="content-box">
                                    <div class="inner">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-4.png')}}"
                                                alt=""></figure>
                                        <h4>Temporary</h4>
                                    </div>
                                    <div class="link"><a href="temprory-staffing.html">More Details</a></div>
                                </div>
                                <div class="overlay-content">
                                    <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                    <a href="temprory-staffing.html"><i class="flaticon-right-arrow"></i>More
                                        details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/service/service-2.jpg')}}" alt="">
                            </figure>
                            <div class="lower-content">
                                <div class="content-box">
                                    <div class="inner">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-5.png')}}"
                                                alt=""></figure>
                                        <h4>Direct Hire</h4>
                                    </div>
                                    <div class="link"><a href="direct-hire.html">More Details</a></div>
                                </div>
                                <div class="overlay-content">
                                    <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                    <a href="direct-hire.html"><i class="flaticon-right-arrow"></i>More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/service/service-3.jpg')}}" alt="">
                            </figure>
                            <div class="lower-content">
                                <div class="content-box">
                                    <div class="inner">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-6.png')}}"
                                                alt=""></figure>
                                        <h4>Contract</h4>
                                    </div>
                                    <div class="link"><a href="contract-hire.html">More Details</a></div>
                                </div>
                                <div class="overlay-content">
                                    <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                    <a href="contract-hire.html"><i class="flaticon-right-arrow"></i>More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- recruitment-technology -->
        <section class="recruitment-technology">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <figure class="image-box js-tilt clearfix"><img src="{{ asset('public/assets/frontend/images/resource/recruitment-1.png')}}"
                                alt=""></figure>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div id="content_block_4">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="top-title">Recruitment technologies</span>
                                    <h2>Solving Recruitment Using Technology</h2>
                                    <p>There are many variations of passages of lorem ipsum available but the majority
                                        have suffered alteration in some form.</p>
                                </div>
                                <div class="inner-box">
                                    <div class="single-item wow fadeInRight animated animated" data-wow-delay="00ms"
                                        data-wow-duration="1500ms">
                                        <div class="inner">
                                            <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-7.png')}}"
                                                    alt=""></figure>
                                            <h3><span>01</span><a href="index.html">Sourcing the Best<i
                                                        class="flaticon-right-arrow"></i></a></h3>
                                            <p>All the lorem ipsum generators on the Internet tend.</p>
                                        </div>
                                    </div>
                                    <div class="single-item wow fadeInRight animated animated" data-wow-delay="300ms"
                                        data-wow-duration="1500ms">
                                        <div class="inner">
                                            <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-8.png')}}"
                                                    alt=""></figure>
                                            <h3><span>02</span><a href="index.html">Volume Hiring<i
                                                        class="flaticon-right-arrow"></i></a></h3>
                                            <p>On the other hand, we denounce with righteous.</p>
                                        </div>
                                    </div>
                                    <div class="single-item wow fadeInRight animated animated" data-wow-delay="600ms"
                                        data-wow-duration="1500ms">
                                        <div class="inner">
                                            <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-9.png')}}"
                                                    alt=""></figure>
                                            <h3><span>03</span><a href="index.html">Partners in Team Building<i
                                                        class="flaticon-right-arrow"></i></a></h3>
                                            <p>Man therefore always holds in these matters to this.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- recruitment-technology end -->


        <!-- industries-section -->
        <section class="industries-section bg-color-1">
            <div class="pattern-layer" style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-7.png')}});"></div>
            <div class="auto-container">
                <div class="tabs-box">
                    <div class="row clearfix">
                        <div class="col-xl-4 col-lg-12 col-sm-12 btn-column">
                            <div class="sec-title light">
                                <span class="top-title">Our Service areas</span>
                                <h2>Industries Hiring</h2>
                            </div>
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-3">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-10.png')}}"
                                                alt=""></figure>
                                        <h3>Logistics & Services</h3>
                                    </li>
                                    <li class="tab-btn" data-tab="#tab-4">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-11.png')}}"
                                                alt=""></figure>
                                        <h3>Hospitality</h3>
                                    </li>
                                    <li class="tab-btn" data-tab="#tab-5">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-12.png')}}"
                                                alt=""></figure>
                                        <h3>Manufacturing</h3>
                                    </li>
                                    <li class="tab-btn" data-tab="#tab-6">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-13.png')}}"
                                                alt=""></figure>
                                        <h3>Education & Government</h3>
                                    </li>
                                    <li class="tab-btn" data-tab="#tab-7">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-14.png')}}"
                                                alt=""></figure>
                                        <h3>Software/IT</h3>
                                    </li>
                                    <li class="tab-btn" data-tab="#tab-8">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-15.png')}}"
                                                alt=""></figure>
                                        <h3>Front Line Support</h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-sm-12 content-column">
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-3">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/resource/industries-1.jpg')}}"
                                                alt=""></figure>
                                        <div class="content-box">
                                            <div class="text">
                                                <h2>Logistics & Services Industries</h2>
                                                <span>26 Jobs in 10 Different Companies</span>
                                            </div>
                                            <div class="line"></div>
                                            <div class="link"><a href="index.html"><i
                                                        class="flaticon-right-arrow-angle"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-4">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/resource/industries-2.jpg')}}"
                                                alt=""></figure>
                                        <div class="content-box">
                                            <div class="text">
                                                <h2>Hospitality</h2>
                                                <span>26 Jobs in 10 Different Companies</span>
                                            </div>
                                            <div class="line"></div>
                                            <div class="link"><a href="index.html"><i
                                                        class="flaticon-right-arrow-angle"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-5">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/resource/industries-3.jpg')}}"
                                                alt=""></figure>
                                        <div class="content-box">
                                            <div class="text">
                                                <h2>Manufacturing</h2>
                                                <span>26 Jobs in 10 Different Companies</span>
                                            </div>
                                            <div class="line"></div>
                                            <div class="link"><a href="index.html"><i
                                                        class="flaticon-right-arrow-angle"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-6">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/resource/industries-4.jpg')}}"
                                                alt=""></figure>
                                        <div class="content-box">
                                            <div class="text">
                                                <h2>Education & Government</h2>
                                                <span>26 Jobs in 10 Different Companies</span>
                                            </div>
                                            <div class="line"></div>
                                            <div class="link"><a href="index.html"><i
                                                        class="flaticon-right-arrow-angle"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-7">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/resource/industries-5.jpg')}}"
                                                alt=""></figure>
                                        <div class="content-box">
                                            <div class="text">
                                                <h2>Software/IT</h2>
                                                <span>26 Jobs in 10 Different Companies</span>
                                            </div>
                                            <div class="line"></div>
                                            <div class="link"><a href="index.html"><i
                                                        class="flaticon-right-arrow-angle"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-8">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="{{ asset('public/assets/frontend/images/resource/industries-6.jpg')}}"
                                                alt=""></figure>
                                        <div class="content-box">
                                            <div class="text">
                                                <h2>Front Line Support</h2>
                                                <span>26 Jobs in 10 Different Companies</span>
                                            </div>
                                            <div class="line"></div>
                                            <div class="link"><a href="index.html"><i
                                                        class="flaticon-right-arrow-angle"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- industries-section end -->


        <!-- process-section -->
        <section class="process-section centred">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="top-title">How it’s Possible</span>
                    <h2>Three Steps of Eazy Recruitz</h2>
                    <p>Long established fact that a reader will be distracted by the <br>readable content of a page.</p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                        <div class="process-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="icon-box">
                                    <img src="{{ asset('public/assets/frontend/images/icons/icon-16.png')}}" alt="">
                                    <span>01</span>
                                    <div class="anim-icon">
                                        <div class="icon-1"
                                            style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-8.png')}});"></div>
                                        <div class="icon-2 rotate-me"
                                            style="background-image: url({{ asset('public/assets/frontend/images/icons/anim-icon-2.png')}});"></div>
                                        <div class="icon-3 rotate-me"
                                            style="background-image: url({{ asset('public/assets/frontend/images/icons/anim-icon-2.png')}});"></div>
                                    </div>
                                </figure>
                                <div class="lower-content">
                                    <h3>Initiation</h3>
                                    <p>Choice is untrammelled when nothing prevents our being best.</p>
                                    <a href="index.html">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                        <div class="process-block-one wow fadeInUp animated animated" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="icon-box">
                                    <img src="{{ asset('public/assets/frontend/images/icons/icon-17.png')}}" alt="">
                                    <span>02</span>
                                    <div class="anim-icon">
                                        <div class="icon-1"
                                            style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-8.png')}});"></div>
                                        <div class="icon-2 rotate-me"
                                            style="background-image: url({{ asset('public/assets/frontend/images/icons/anim-icon-2.png')}});"></div>
                                        <div class="icon-3 rotate-me"
                                            style="background-image: url({{ asset('public/assets/frontend/images/icons/anim-icon-2.png')}});"></div>
                                    </div>
                                </figure>
                                <div class="lower-content">
                                    <h3>Scheduling</h3>
                                    <p>Power of choiced is untrammelled and when nothing prevents.</p>
                                    <a href="index.html">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                        <div class="process-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="icon-box">
                                    <img src="{{ asset('public/assets/frontend/images/icons/icon-18.png')}}" alt="">
                                    <span>03</span>
                                    <div class="anim-icon">
                                        <div class="icon-1"
                                            style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-8.png')}});"></div>
                                        <div class="icon-2 rotate-me"
                                            style="background-image: url({{ asset('public/assets/frontend/images/icons/anim-icon-2.png')}});"></div>
                                        <div class="icon-3 rotate-me"
                                            style="background-image: url({{ asset('public/assets/frontend/images/icons/anim-icon-2.png')}});"></div>
                                    </div>
                                </figure>
                                <div class="lower-content">
                                    <h3>Contracts & Pay</h3>
                                    <p>Every pleasure is to be welcomed pain avoided but in certain.</p>
                                    <a href="index.html">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- process-section end -->


        <!-- team-section -->
        <section class="team-section">
            <div class="pattern-layer" style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-9.png')}});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 experience-column">
                        <div id="content_block_5">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="top-title">Team Behind Us</span>
                                    <h2>Our Experience & Team</h2>
                                </div>
                                <div class="text">
                                    <p>Obligations of business it will frequently occur that pleasures have to be
                                        repudiated & annoyances accepted the wise man therefore always hold in these
                                        matters to this principle of selection.</p>
                                </div>
                                <div class="progress-inner">
                                    <div class="progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="52%">
                                                <div class="count-text">52%</div>
                                            </div>
                                        </div>
                                        <h6>Temporary</h6>
                                    </div>
                                    <div class="progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="78%">
                                                <div class="count-text">78%</div>
                                            </div>
                                        </div>
                                        <h6>Contract</h6>
                                    </div>
                                    <div class="progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="65%">
                                                <div class="count-text">65%</div>
                                            </div>
                                        </div>
                                        <h6>Direct Hire</h6>
                                    </div>
                                    <div class="progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="89%">
                                                <div class="count-text">89%</div>
                                            </div>
                                        </div>
                                        <h6>Payrolling</h6>
                                    </div>
                                </div>
                                <div class="link"><a href="index.html"><i class="flaticon-right-arrow"></i>Meet All
                                        Team Members</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 team-block wow fadeInUp animated animated"
                                data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="team-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <img src="{{ asset('public/assets/frontend/images/team/team-1.jpg')}}" alt="">
                                            <span class="singature">Our Champ</span>
                                            <div class="share-box">
                                                <p><i class="fas fa-share-alt"></i>Share</p>
                                                <ul class="social-links clearfix">
                                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a>
                                                    </li>
                                                    <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                                                </ul>
                                            </div>
                                        </figure>
                                        <div class="lower-content">
                                            <h3><a href="index.html">Garrett Barnie</a></h3>
                                            <span class="designation">Founder</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <img src="{{ asset('public/assets/frontend/images/team/team-2.jpg')}}" alt="">
                                            <span class="singature">Our Champ</span>
                                            <div class="share-box">
                                                <p><i class="fas fa-share-alt"></i>Share</p>
                                                <ul class="social-links clearfix">
                                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a>
                                                    </li>
                                                    <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                                                </ul>
                                            </div>
                                        </figure>
                                        <div class="lower-content">
                                            <h3><a href="index.html">Isaac Herman</a></h3>
                                            <span class="designation">VP, Finance</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 team-block wow fadeInUp animated animated"
                                data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="team-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <img src="{{ asset('public/assets/frontend/images/team/team-3.jpg')}}" alt="">
                                            <span class="singature">Our Champ</span>
                                            <div class="share-box">
                                                <p><i class="fas fa-share-alt"></i>Share</p>
                                                <ul class="social-links clearfix">
                                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a>
                                                    </li>
                                                    <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                                                </ul>
                                            </div>
                                        </figure>
                                        <div class="lower-content">
                                            <h3><a href="index.html">Joel Lou</a></h3>
                                            <span class="designation">Senior Consultant</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->


        <!-- news-section -->
        <section class="news-section">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="top-title">News & Updates</span>
                    <h2>Featured News and Updates</h2>
                    <p>Long established fact that a reader will be distracted by the <br />readable content of a page.
                    </p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="blog-details.html"><img src="{{ asset('public/assets/frontend/images/news/news-1.jpg')}}"
                                            alt=""></a>
                                    <span class="post-date">21<br />May</span>
                                </figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="category"><i class="flaticon-note"></i>
                                            <p>Human Resource</p>
                                        </div>
                                        <h3><a href="blog-details.html">5 Effective Ways to Hire More Workers</a></h3>
                                        <ul class="post-info clearfix">
                                            <li><i class="far fa-user"></i><a href="index.html">Harley Reuban</a></li>
                                            <li><i class="far fa-comment"></i><a href="index.html">3 Cmnts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="blog-details.html"><img src="{{ asset('public/assets/frontend/images/news/news-2.jpg')}}"
                                            alt=""></a>
                                    <span class="post-date">20<br />May</span>
                                </figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="category"><i class="flaticon-note"></i>
                                            <p>Techiques</p>
                                        </div>
                                        <h3><a href="blog-details.html">Does My Business Need a Director of
                                                Training?</a></h3>
                                        <ul class="post-info clearfix">
                                            <li><i class="far fa-user"></i><a href="index.html">Harley Reuban</a></li>
                                            <li><i class="far fa-comment"></i><a href="index.html">5 Cmnts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="blog-details.html"><img src="{{ asset('public/assets/frontend/images/news/news-3.jpg')}}"
                                            alt=""></a>
                                    <span class="post-date">19<br />May</span>
                                </figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="category"><i class="flaticon-note"></i>
                                            <p>Recruitment</p>
                                        </div>
                                        <h3><a href="blog-details.html">What are the 2020 Staffing Trends in USA</a>
                                        </h3>
                                        <ul class="post-info clearfix">
                                            <li><i class="far fa-user"></i><a href="index.html">Harley Reuban</a></li>
                                            <li><i class="far fa-comment"></i><a href="index.html">4 Cmnts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- testimonial-section -->
        <section class="testimonial-section bg-color-2">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="top-title">Client Testimonials</span>
                    <h2>Highest Client Satisfaction Rate</h2>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="border-shap" style="background-image: url({{ asset('public/assets/frontend/images/shape/border-1.png')}});">
                            </div>
                            <figure class="quote-box"><img src="{{ asset('public/assets/frontend/images/icons/quote-1.png')}}" alt="">
                            </figure>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{ asset('public/assets/frontend/images/resource/testimonial-1.png')}}"
                                        alt=""></figure>
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                </ul>
                                <h3>Evan Clement - <span>Manager, Cypertech</span></h3>
                            </div>
                            <div class="text">
                                <p>[Eazy Recruitz] is very accurate when comes to helping you find a job and if that job
                                    finishes, They help you to find an another job placement!.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="border-shap"
                                style="background-image: url({{ asset('public/assets/frontend/images/shape/border-1.png')}});">
                            </div>
                            <figure class="quote-box"><img src="{{ asset('public/assets/frontend/images/icons/quote-1.png')}}" alt="">
                            </figure>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{ asset('public/assets/frontend/images/resource/testimonial-2.png')}}"
                                        alt=""></figure>
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                </ul>
                                <h3>Freddie Esther - <span>VP, Daily News</span></h3>
                            </div>
                            <div class="text">
                                <p>I really appreciated the outstanding time, work, and effort that the entire staff put
                                    into finding me an excellent job placement. Thank you very much.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <!-- awards-section -->
        <section class="awards-section">
            <div class="pattern-layer" style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-10.png')}});"></div>
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="top-title">Our Excellence</span>
                    <h2>Awards & Major Achievements</h2>
                    <p>Long established fact that a reader will be distracted by the <br />readable content of a page.
                    </p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="inner-block">
                            <div class="single-award-block">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-19.png')}}"
                                                alt=""></figure>
                                        <h3>Best of Staffing Talent Award</h3>
                                    </div>
                                    <ul class="lower-box">
                                        <li><span>Year</span>:2009-2010</li>
                                        <li><span>Award by</span>:Los Vegas Business Time</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-award-block">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-19.png')}}"
                                                alt=""></figure>
                                        <h3>Best Companies to Work in Texas</h3>
                                    </div>
                                    <ul class="lower-box">
                                        <li><span>Year</span>:2012-2013</li>
                                        <li><span>Award by</span>:Sparks Group</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                        <figure class="image-box js-tilt"><img src="{{ asset('public/assets/frontend/images/resource/award-1.png')}}"
                                alt=""></figure>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="inner-block">
                            <div class="single-award-block">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-19.png')}}"
                                                alt=""></figure>
                                        <h3>Fast Growing Staffing Firms</h3>
                                    </div>
                                    <ul class="lower-box">
                                        <li><span>Year</span>:2015</li>
                                        <li><span>Award by</span>:Dallas Association 100</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-award-block">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <figure class="icon-box"><img src="{{ asset('public/assets/frontend/images/icons/icon-19.png')}}"
                                                alt=""></figure>
                                        <h3>Best of Staffing Client Satisfaction</h3>
                                    </div>
                                    <ul class="lower-box">
                                        <li><span>Year</span>:2018-2019</li>
                                        <li><span>Award by</span>:Forbes International</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- awards-section end -->


        <!-- main-footer -->
        <footer class="main-footer bg-color-1">
            <div class="pattern-layer" style="background-image: url({{ asset('public/assets/frontend/images/shape/pattern-11.png')}});"></div>
            <div class="auto-container">
                <div class="footer-top">
                    <div class="widget-section">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget about-widget">
                                    <div class="widget-title">
                                        <h3>Office</h3>
                                    </div>
                                    <div class="text">
                                        <p>It is a long established fact that a reader will distracted by the readable
                                            ... <i class="fas fa-arrow-up"></i></p>
                                        <p>United States <br />866 Wilshire, 2nd Street <br />Los Angeles 90024.</p>
                                    </div>
                                    <ul class="social-links clearfix">
                                        <li>
                                            <h5>Connected:</h5>
                                        </li>
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>Useful Links</h3>
                                    </div>
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">About Us</a></li>
                                        <li><a href="index.html">Resources</a></li>
                                        <li><a href="index.html">Our Solutions</a></li>
                                        <li><a href="index.html">Testimonials</a></li>
                                        <li><a href="index.html">Employers</a></li>
                                        <li><a href="index.html">How It’s Work</a></li>
                                        <li><a href="index.html">Job Seekers</a></li>
                                        <li><a href="index.html">Industries</a></li>
                                        <li><a href="index.html">Leadership</a></li>
                                        <li><a href="index.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget contact-widget">
                                    <div class="single-info-box">
                                        <div class="widget-title">
                                            <h3>For Employers</h3>
                                        </div>
                                        <ul class="info-box clearfix">
                                            <li><a href="tel:8004561234">(800) 456-1234</a></li>
                                            <li><a
                                                    href="mailto:businesspartner@example.com">businesspartner@example.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single-info-box">
                                        <div class="widget-title">
                                            <h3>For Employees</h3>
                                        </div>
                                        <ul class="info-box clearfix">
                                            <li><a href="tel:8004560123">(800) 789-0123</a></li>
                                            <li><a href="mailto:careeroption@example.com">careeroption@example.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-subscribe">
                    <div class="text centred">
                        <h3>Subscribe Us & Get Our Recruitment Updates in Your Inbox</h3>
                    </div>
                    <form action="contact.html" method="post" class="subscribe-form">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter your email address here ..."
                                required="">
                            <button type="submit"><i class="flaticon-right-arrow"></i>Subscribe US</button>
                        </div>
                    </form>
                </div>
                <div class="footer-bottom clearfix">
                    <div class="copyright pull-left">
                        <p>&copy; 2020 <a href="index.html">Eazy Recruitz</a>, All Rights Reserved.</p>
                    </div>
                    <ul class="footer-nav pull-right clearfix">
                        <li><a href="index.html">Privacy Policy</a></li>
                        <li><a href="index.html">Terms & Conditions</a></li>
                        <li><a href="index.html">Site Map</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html"><i
                class="flaticon-up-arrow-1"></i>Top</button>
    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('public/assets/frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/owl.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/wow.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/validation.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/appear.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/scrollbar.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/isotope.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/tilt.jquery.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('public/assets/frontend/js/script.js') }}"></script>
</body><!-- End of .page_wrapper -->

</html>
