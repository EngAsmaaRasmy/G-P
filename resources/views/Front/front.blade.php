<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Medi-tech - HTML Template | Home Page 03</title>
    <!-- Stylesheets -->
    <link href="{{URL::asset('frontend/css/front_css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('frontend/css/front_css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('frontend/css/front_css/responsive.css')}}" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href={{URL::asset('frontend/css/front_css/color-switcher-design.css')}}" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="{{URL::asset('frontend/css/front_css/color-themes/default-theme.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{URL::asset('frontend/css/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href=""{{URL::asset('frontend/css/images/favicon.png')}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header header-style-three">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container clearfix">

                <!--Info-->
                <div class="logo-outer">
                    <div class="logo"><a href="index.html"><img src="{{URL::asset('frontend/images/logo-3.png')}}" alt="" title=""></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="index-3.html">Home</a>
                                </li>
                                <li class="dropdown"><a href="#">About us</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="services.html">Services</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu-bar row clearfix">
                                            <div class="column col-md-3 col-xs-12">
                                                <h3>About Us</h3>
                                                <ul>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="team.html">Our Team</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="services.html">Services</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-md-3 col-xs-12">
                                                <h3>Doctors</h3>
                                                <ul>
                                                    <li><a href="doctors.html">Doctors</a></li>
                                                    <li><a href="doctors-detail.html">Doctors Detail</a></li>
                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="#">Doctors</a>
                                    <ul>
                                        <li><a href="doctors.html">Doctors</a></li>
                                        <li><a href="doctors-detail.html">Doctors Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Department</a>
                                    <ul>
                                        <li><a href="department.html">Department</a></li>
                                        <li><a href="department-detail.html">Department Detail</a></li>
                                    </ul>
                                </li>
                                @if (Route::has('login'))
                                 <li class="dropdown">
                                     @auth
                                         <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                                         @else
                                         <a href="{{ route('login') }}">Log in</a>

                                      @endauth

                                </li>
                                    @endif


                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <!-- Main Menu End-->
                        <div class="nav-box">
                            <div class="nav-btn nav-toggler navSidebar-button"><span class="icon flaticon-menu-1"></span></div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="{{URL::asset('frontend/images/logo-small.png')}}" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon far fa-window-close"></span></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{URL::asset('frontend/images/nav-logo.png')}}" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!-- Main Slider Three -->
    <section class="main-slider-three">
        <div class="banner-carousel">
            <!-- Swiper -->
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h2>Your Most Trusted Health Partner For Life.</h2>
                                    <div class="text">We offer free consulting and the best project management for your ideas, 100% delivery guaranteed.</div>
                                    <div class="btn-box">
                                        <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">Appointment</span></a>
                                        <a href="services.html" class="theme-btn services-btn">Services</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{URL::asset('frontend/images/main-slider/3.jpg')}}" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="swiper-slide slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h2>Your Most Trusted Health Partner For Life.</h2>
                                    <div class="text">We offer free consulting and the best project management for your ideas, 100% delivery guaranteed.</div>
                                    <div class="btn-box">
                                        <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">Appointment</span></a>
                                        <a href="services.html" class="theme-btn services-btn">Services</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{URL::asset('frontend/images/main-slider/3.jpg')}}" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="swiper-slide slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h2>Your Most Trusted Health Partner For Life.</h2>
                                    <div class="text">We offer free consulting and the best project management for your ideas, 100% delivery guaranteed.</div>
                                    <div class="btn-box">
                                        <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">Appointment</span></a>
                                        <a href="services.html" class="theme-btn services-btn">Services</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{URL::asset('frontend/images/main-slider/3.jpg')}}" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!-- Health Section -->
    <section class="health-section">
        <div class="auto-container">
            <div class="inner-container">

                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="border-line"></div>
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <h2>Who We Are <br> Pioneering in Health.</h2>
                                <div class="separator"></div>
                            </div>
                            <div class="text">Where you are at the heart of our mission. We hope you will consider us as your medical home—the place where you feel safe, comfortable and cared for. As a multi-specialty medical group,</div>
                            <a href="about.html" class="theme-btn btn-style-one"><span class="txt">More About Us</span></a>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{URL::asset('frontend/images/resource/image-3.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Health Section -->

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon flaticon-doctor-stethoscope"></div>
                            <h3><a href="#">Medical Treatment</a></h3>
                        </div>
                        <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon flaticon-ambulance-side-view"></div>
                            <h3><a href="#">Emergency Help</a></h3>
                        </div>
                        <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon fas fa-user-md"></div>
                            <h3><a href="#">Qualified Doctors</a></h3>
                        </div>
                        <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon fas fa-briefcase-medical"></div>
                            <h3><a href="#">Medical Professionals</a></h3>
                        </div>
                        <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Featured Section -->

    <!-- Department Section Three -->
    <section class="department-section-three">
        <div class="image-layer" style="background-image:url({{URL::asset('frontend/images/background/6.jpg')}})"></div>
        <div class="auto-container">
            <!-- Department Tabs-->
            <div class="department-tabs tabs-box">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <h2>Health <br> Department</h2>
                            <div class="separator"></div>
                        </div>
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#tab-urology" class="tab-btn">Urology Department</li>
                            <li data-tab="#tab-department" class="tab-btn active-btn">Neurology Department</li>
                            <li data-tab="#tab-gastrology" class="tab-btn">Gastrology Department</li>
                            <li data-tab="#tab-cardiology" class="tab-btn">Cardiology Department</li>
                            <li data-tab="#tab-eye" class="tab-btn">Eye Care Department</li>
                        </ul>
                    </div>
                    <!--Column-->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <!--Tabs Container-->
                        <div class="tabs-content">

                            <!-- Tab -->
                            <div class="tab" id="tab-urology">
                                <div class="content">
                                    <h2>Urology Department</h2>
                                    <div class="title">Department of Neurology</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                        </div>
                                    </div>
                                    <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab active-tab" id="tab-department">
                                <div class="content">
                                    <h2>Neurology Department</h2>
                                    <div class="title">Department of Neurology</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                        </div>
                                    </div>
                                    <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="tab-gastrology">
                                <div class="content">
                                    <h2>Gastrology Department</h2>
                                    <div class="title">Department of Neurology</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                        </div>
                                    </div>
                                    <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="tab-cardiology">
                                <div class="content">
                                    <h2>Cardiology Department</h2>
                                    <div class="title">Department of Neurology</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                        </div>
                                    </div>
                                    <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="tab-eye">
                                <div class="content">
                                    <h2>Eye Care Department</h2>
                                    <div class="title">Department of Neurology</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
                                        </div>
                                    </div>
                                    <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Department Section -->


    <!-- Counter Section -->
    <section class="counter-section style-two mt-5" style="background-image: url({{URL::asset('frontend/images/background/pattern-3.png')}})">
        <div class="auto-container">

            <!-- Fact Counter -->
            <div class="fact-counter style-two">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="2350">0</span>
                                </div>
                                <h4 class="counter-title">Satisfied Patients</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box alternate">
                                    +<span class="count-text" data-speed="3000" data-stop="350">0</span>
                                </div>
                                <h4 class="counter-title">Doctor’s Team</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="2150">0</span>
                                </div>
                                <h4 class="counter-title">Success Mission</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    +<span class="count-text" data-speed="2500" data-stop="225">0</span>
                                </div>
                                <h4 class="counter-title">Successfull Surgeries</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Doctor Info Section -->
    <section class="doctor-info-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Doctor Block -->
                    <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h3>Working Hours</h3>
                            <ul class="doctor-time-list">
                                <li>Mon–Fri <span>8:00am–7:00pm</span></li>
                                <li>Saturday <span>9:00am–5:00pm</span></li>
                                <li>Sunday <span>9:00am–3:00pm</span></li>
                            </ul>
                            <h4>Emergency Cases</h4>
                            <div class="phone">Call us! <strong>+898 68679 575 09</strong></div>
                        </div>
                    </div>

                    <!-- Doctor Block -->
                    <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h3>Doctors Timetable</h3>
                            <div class="text">The following is for guidance only to help you plan your appointment with a preferred doctor or nurse. It does not guarantee availability as the doctors or nurses may sometimes be attending to other duties.</div>
                            <a href="#" class="detail">More Detail</a>
                        </div>
                    </div>

                    <!-- Doctor Block -->
                    <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h3>Primary Health Care</h3>
                            <div class="text">When you know you are using your best talents for something you love, you can’t it. Effective communication is the basis for building brands as solid as the relation-ships with build with our clients..</div>
                            <a href="#" class="detail">Contact Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Doctor Info Section -->




    <!--Main Footer-->
    <footer class="main-footer style-two">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="index.html"><img src="images/logo-3.png" alt="" /></a>
                                    </div>
                                    <div class="text">Meditech is a library of health and medical templates with predefined web elements which helps you to build your medical templates best site Provide Comprehensive Quality Care About Medical Care Health Suspendisse metus turpis.</div>
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <div class="footer-title  clearfix">
                                        <h2>Departments</h2>
                                        <div class="separator"></div>
                                    </div>
                                    <ul class="footer-list">
                                        <li><a href="#">Surgery & Radiology</a></li>
                                        <li><a href="#">Family Medicine</a></li>
                                        <li><a href="#">Women’s Health</a></li>
                                        <li><a href="#">Optician</a></li>
                                        <li><a href="#">Pediatrics</a></li>
                                        <li><a href="#">Dermatology</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
                                    <div class="footer-title  clearfix">
                                        <h2>News Update</h2>
                                        <div class="separator"></div>
                                    </div>

                                    <!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="images/resource/news-image-1.jpg" alt="" />
                                            </div>
                                            <h3><a href="blog-detail.html">Integrative Medicine And Cancer Treatment</a></h3>
                                            <div class="post-date">July 11, 2017</div>
                                        </div>
                                    </div>

                                    <!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="images/resource/news-image-2.jpg" alt="" />
                                            </div>
                                            <h3><a href="blog-detail.html">Achieving Better Health Care One Patient  Time</a></h3>
                                            <div class="post-date">July 11, 2018</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <div class="footer-title  clearfix">
                                        <h2>Contact Us</h2>
                                        <div class="separator"></div>
                                    </div>

                                    <ul class="contact-list">
                                        <li><span class="icon flaticon-placeholder"></span>2130 Fulton Street San Diego <br> CA 94117-1080 USA</li>
                                        <li><span class="icon flaticon-call"></span>Mon to Fri : 08:30 - 18:00 <br> <a href="tel:+898-68679-575-09">+898 68679 575 09</a></li>
                                        <li><span class="icon flaticon-message"></span>Do you have a Question? <a href="mailto:info@gmail.com">info@gmail.com</a></li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright">MediTech Helth Care &copy; All Rights Reserved By Expertthemes</div>
            </div>
        </div>

    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Logistics</a></li>
                <li><a href="#">Freedom</a></li>
            </ul>

        </div>

    </div>
</div>

<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
                </a>
            </div>
            <div class="sidebar-textwidget">

                <!-- Sidebar Info Content -->
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">
                            <a href="index.html"><img src="images/logo-3.png" alt="" /></a>
                        </div>
                        <div class="content-box">
                            <h2>About Us</h2>
                            <p class="text">Core values are the fundamental beliefs of a person or organization. The core values are the guiding prin ples that dictate behavior and action suas labore saperet has there any quote for write lorem percit latineu.</p>
                            <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                        </div>
                        <div class="contact-info">
                            <h2>Contact Info</h2>
                            <ul class="list-style-two">
                                <li><span class="icon flaticon-map"></span>Chicago 12, Melborne City, USA</li>
                                <li><span class="icon flaticon-telephone"></span>(111) 111-111-1111</li>
                                <li><span class="icon flaticon-message-1"></span>meditech@gmail.com</li>
                                <li><span class="icon flaticon-timetable"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                            </ul>
                        </div>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                            <li class="twitter"><a href="#" class="fab fa-twitter"></a></li>
                            <li class="linkedin"><a href="#" class="fab fa-linkedin-in"></a></li>
                            <li class="instagram"><a href="#" class="fab fa-instagram"></a></li>
                            <li class="youtube"><a href="#" class="fab fa-youtube"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- END sidebar widget item -->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fas fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>

    <ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>

    <a href="#" class="purchase-btn">Purchase now $17</a>

    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>

<!--Scroll to top-->
<script src="{{URL::asset('frontend/js/front_js/jquery.js')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/popper.min.js')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/jquery-ui.js')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/jquery.fancybox.js')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/jquery.paroller.min.j')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/owl.js')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/wow.js')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/nav-tool.js')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/main.js')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/swiper.min.js')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/appear.js')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/script.js')}}"></script>
<script src="{{URL::asset('frontend/js/front_js/color-settings.js')}}"></script>


</body>
</html>
