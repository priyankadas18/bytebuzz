<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Bytebuzz - Simple. Scalable. Smart.</title>
    <meta name="author" content="wpriverthemes.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
        content="Davies - Personal Portfolio is a sleek and modern HTML template designed for developers, designers, freelancers, and professionals who want to showcase their work online. Fully responsive, SEO-friendly, and easy to customize, it helps you create a strong personal brand and impress potential clients or employers.">

    <!-- font -->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon.svg') }}">
</head>

<body class="counter-scroll">
    <canvas class="cursor-trail" id="trail" style="display: none;"></canvas>

    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="ic-wrap">
            <span class="icon icon-long-arrow-alt-up-solid"></span>
        </span>
    </button>
    <!-- /Scroll Top -->

    <!-- #wrapper -->
    <main id="wrapper">

        <!-- Header -->
        <header class="tf-header header2">
            <div class="header-inner">
                <a href="{{ url('/') }}" class="logo-site">
                    <img src="{{ asset('images/2.png') }}" style="width: 50%;">
                </a>
                <div class="box-navigation">
                    <ul class="nav-menu-main">
                        <li class="menu-item">
                            <a href="{{ url('/') }}" class="item-link link1 active">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="#about" class="item-link link1">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="#services" class="item-link link1">Services</a>
                        </li>
                        <li class="menu-item">
                            <a href="#works" class="item-link link1">Works</a>
                        </li>
                        <li class="menu-item">
                            <a href="#contact" class="item-link link1">Contact</a>
                        </li>
                    </ul>
                </div>
                <a href="#contact" class="tf-btn d-lg-flex d-none">
                    Start a Project
                </a>
                <a href="#" class="tf-btn open-mb-menu mobile-menu d-lg-none d-flex">
                    <i class="icon icon-grip-lines-solid"></i>
                </a>
            </div>
        </header>
        <!-- Hero Banner -->
        <div class="section-hero">
            <div class="hero-image"></div>
            <div class="container">
                <div class="content-wrap text-center">

                    <div class="title text-display-2 effectFade fadeRotateX">
                        <span class="title1 fw-semibold text-gradient-1">We Build Smart Software</span>
                        <br>
                        <div class="title2 d-flex gap-20 justify-content-center flex-wrap">
                            <span class="fw-semibold text-gradient-1">for Modern Businesses</span>
                        </div>
                    </div>
                    <p class="text effectFade fadeUp">
                        At Bytebuzz, we design and develop clean, scalable, and high-performance digital products for
                        startups and growing companies.
                    </p>
                    <div class="bot-btns effectFade fadeRotateX">
                        <a href="#contact" class="tf-btn">
                            Start a Project
                        </a>
                        <a href="#works" class="tf-btn-2">
                            View Our Work
                        </a>
                    </div>
                </div>
            </div>
            <a href="#about" class="scroll-more">
                <span class="fw-semibold link1">Scroll for more</span>
                <i class="icon icon-long-arrow-alt-down-solid"></i>
            </a>
        </div>
        <!-- section-about-us -->
        <div class="section-about-us flat-spacing" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-section">
                            <div class="heading-sub fw-semibold effectFade fadeUp">About Us</div>
                            <div class="heading-title text-gradient-2 effectFade fadeRotateX">Designed for Real Users
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-lg-6 lg-mb-24">
                        <div class="col-left">
                            <div class="position-relative z-5">
                                <div class="sub text-white">
                                    <span class="dot"></span>
                                    Available for worldwide project
                                </div>
                                <h5 class="title fw-semibold text-white">Proudly Based in <span class="text-brand">
                                        Odisha, India</span></h5>
                                <a href="#contact" class="tf-btn">
                                    Start a Project
                                </a>
                            </div>
                            <img class="effectFade fadeRotateX" src="{{ asset('images/earth.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-5 col-lg-6">
                        <div class="review-box mb-24">
                            <div class="desc fw-semibold text-body-1">We focus on building software that is simple,
                                efficient, and designed for real users. Our goal is to create digital products that are
                                easy to use and powerful to scale.</div>
                            <div class="d-flex justify-content-between flex-wrap align-items-end gap-12">
                                <div class="">
                                    <div class="d-flex gap-4 text mb-10">
                                        <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.6792 18.3019L18.1887 16.9057L20.4906 24L12.6792 18.3019ZM25.3585 9.13208H15.6604L12.6792 0L9.69811 9.13208H0L7.84906 14.7925L4.86792 23.9245L12.717 18.2641L17.5472 14.7925L25.3585 9.13208Z"
                                                fill="#219653"></path>
                                        </svg>
                                        Trustpilot
                                    </div>
                                    <div class="d-flex gap-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="24" height="24" fill="#3F3F46"></rect>
                                            <path
                                                d="M11.9996 16.4114L15.6496 15.4341L17.1746 20.4001L11.9996 16.4114ZM20.3996 9.99255H13.9746L11.9996 3.6001L10.0246 9.99255H3.59961L8.79961 13.9548L6.82461 20.3473L12.0246 16.385L15.2246 13.9548L20.3996 9.99255Z"
                                                fill="white"></path>
                                        </svg>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="24" height="24" fill="#3F3F46"></rect>
                                            <path
                                                d="M11.9996 16.4114L15.6496 15.4341L17.1746 20.4001L11.9996 16.4114ZM20.3996 9.99255H13.9746L11.9996 3.6001L10.0246 9.99255H3.59961L8.79961 13.9548L6.82461 20.3473L12.0246 16.385L15.2246 13.9548L20.3996 9.99255Z"
                                                fill="white"></path>
                                        </svg>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="24" height="24" fill="#3F3F46"></rect>
                                            <path
                                                d="M11.9996 16.4114L15.6496 15.4341L17.1746 20.4001L11.9996 16.4114ZM20.3996 9.99255H13.9746L11.9996 3.6001L10.0246 9.99255H3.59961L8.79961 13.9548L6.82461 20.3473L12.0246 16.385L15.2246 13.9548L20.3996 9.99255Z"
                                                fill="white"></path>
                                        </svg>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="24" height="24" fill="#3F3F46"></rect>
                                            <path
                                                d="M11.9996 16.4114L15.6496 15.4341L17.1746 20.4001L11.9996 16.4114ZM20.3996 9.99255H13.9746L11.9996 3.6001L10.0246 9.99255H3.59961L8.79961 13.9548L6.82461 20.3473L12.0246 16.385L15.2246 13.9548L20.3996 9.99255Z"
                                                fill="white"></path>
                                        </svg>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="24" height="24" fill="#3F3F46"></rect>
                                            <path
                                                d="M11.9996 16.4114L15.6496 15.4341L17.1746 20.4001L11.9996 16.4114ZM20.3996 9.99255H13.9746L11.9996 3.6001L10.0246 9.99255H3.59961L8.79961 13.9548L6.82461 20.3473L12.0246 16.385L15.2246 13.9548L20.3996 9.99255Z"
                                                fill="white"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="counter text-neutral-200">
                                    <span class="number" data-speed="1500" data-to="50"
                                        data-inviewport="yes">10</span><span>+ Projects</span>
                                </div>
                                <div class="counter text-neutral-200">
                                    <span class="number" data-speed="1500" data-to="20"
                                        data-inviewport="yes">5</span><span>+ Happy Clients</span>
                                </div>
                                <div class="counter text-neutral-200">
                                    <span class="number" data-speed="1500" data-to="100"
                                        data-inviewport="yes">60</span><span>% Satisfaction</span>
                                </div>
                            </div>
                        </div>
                        <div class="box-quotes effectFade fadeRotateX">
                            <div class="content">
                                <div class="icon mb-8">
                                    <svg width="23" height="20" viewBox="0 0 23 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.9375 20V10.3597C12.9375 7.72182 13.824 5.51559 15.5969 3.74101C17.4177 1.91847 19.8854 0.671463 23 0V6.40288C21.8021 6.78657 21.0115 7.26619 20.6281 7.84173C20.2448 8.3693 20.0292 9.04077 19.9813 9.85612H23V20H12.9375ZM0 20V10.3597C0 7.72182 0.886459 5.51559 2.65938 3.74101C4.48021 1.91847 6.94792 0.671463 10.0625 0V6.40288C8.9125 6.78657 8.12187 7.26619 7.69062 7.84173C7.30729 8.3693 7.09167 9.04077 7.04375 9.85612H10.0625V20H0Z"
                                            fill="#E4E4E7"></path>
                                    </svg>
                                </div>
                                <div class="text-body-1 fw-semibold desc">We build simple solutions for complex
                                    problems.</div>
                                <div class="cite">
                                    <div class="name text-body-3 fw-semibold">Bytebuzz Team</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section-partner -->
        <div class="section-partner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="partner-wrap">
                            <p class="text-secondary text fw-semibold">Technologies we used</p>
                            <div class="infiniteSlide_tech_main d-grid">
                                <div class="infiniteSlide infiniteSlide_partner" data-clone="5">
                                    <img src="{{ asset('images/react.svg') }}" alt="React" class="tech-logo">
                                    <img src="{{ asset('images/php.png') }}" alt="PHP" class="tech-logo">
                                    <img src="{{ asset('images/laravel.svg') }}" alt="Laravel" class="tech-logo">
                                    <img src="{{ asset('images/nodejs.svg') }}" alt="Node.js" class="tech-logo">
                                    <img src="{{ asset('images/figma.svg') }}" alt="Figma" class="tech-logo">
                                    <img src="{{ asset('images/mysql.svg') }}" alt="MySQL" class="tech-logo">
                                    <img src="{{ asset('images/mongodb.svg') }}" alt="MongoDB" class="tech-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-white">
            <!-- section-services -->
            <div id="services" class="section-services flat-spacing">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xxl-4 col-lg-6">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div class="col-left">
                                    <div class="heading-section mb-48">
                                        <div class="heading-sub fw-semibold effectFade fadeUp">Services</div>
                                        <div class="heading-title text-gradient-3 effectFade fadeRotateX">End-to-End
                                            <br> Software Services</div>
                                    </div>
                                    <p class="effectFade fadeUp">We focus on building software that is simple,
                                        efficient, and designed for real users. Our goal is to create digital products
                                        that are easy to use and powerful to scale.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6">
                            <div class="accordion-faq_list" id="accordion-services">
                                <div class="accordion-faq_item effectFade fadeUp" role="presentation">
                                    <div class="accordion-action services-image-btn active-img"
                                        data-img="{{ asset('images/service-web.png') }}" data-bs-target="#faq-1" role="button"
                                        data-bs-toggle="collapse" aria-controls="faq-1" aria-expanded="true">
                                        <div class="accordion-title">
                                            Web Development
                                            <div class="text-body-1 num">(01)</div>
                                        </div>
                                    </div>
                                    <div id="faq-1" class="collapse show" data-bs-parent="#accordion-services">
                                        <div class="accordion-content">
                                            <div class="text-body-3 text-neutral-300 text">Modern, fast, and responsive
                                                websites.</div>
                                            <div class="list-tags">
                                                <a href="#" class="tags-item fw-semibold">PHP</a>
                                                <a href="#" class="tags-item fw-semibold">Laravel</a>
                                                <a href="#" class="tags-item fw-semibold">React</a>
                                                <a href="#" class="tags-item fw-semibold">Next.js</a>
                                                <a href="#" class="tags-item fw-semibold">Performance Optimization</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq_item effectFade fadeUp" role="presentation">
                                    <div class="accordion-action services-image-btn collapsed"
                                        data-img="{{ asset('images/service-app.png') }}" data-bs-target="#faq-2" role="button"
                                        data-bs-toggle="collapse" aria-controls="faq-2" aria-expanded="false">
                                        <div class="accordion-title">
                                            App Development
                                            <div class="text-body-1 num">(02)</div>
                                        </div>
                                    </div>
                                    <div id="faq-2" class="collapse" data-bs-parent="#accordion-services">
                                        <div class="accordion-content">
                                            <div class="text-body-3 text-neutral-300 text">Mobile apps built for
                                                performance and usability.</div>
                                            <div class="list-tags">
                                                <a href="#" class="tags-item fw-semibold">React Native</a>
                                                <a href="#" class="tags-item fw-semibold">Flutter</a>
                                                <a href="#" class="tags-item fw-semibold">iOS & Android</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq_item effectFade fadeUp" role="presentation">
                                    <div class="accordion-action services-image-btn collapsed"
                                        data-img="{{ asset('images/service-digital-marketing.png') }}" data-bs-target="#faq-3"
                                        role="button" data-bs-toggle="collapse" aria-controls="faq-3"
                                        aria-expanded="false">
                                        <div class="accordion-title">
                                            Digital Marketing
                                            <div class="text-body-1 num">(03)</div>
                                        </div>
                                    </div>
                                    <div id="faq-3" class="collapse" data-bs-parent="#accordion-services">
                                        <div class="accordion-content">
                                            <div class="text-body-3 text-neutral-300 text">
                                                Result-driven digital marketing strategies to grow your brand and
                                                generate leads.
                                            </div>
                                            <div class="list-tags">
                                                <a href="#" class="tags-item fw-semibold">SEO</a>
                                                <a href="#" class="tags-item fw-semibold">Social Media Marketing</a>
                                                <a href="#" class="tags-item fw-semibold">Google Ads</a>
                                                <a href="#" class="tags-item fw-semibold">Content Marketing</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq_item effectFade fadeUp" role="presentation">
                                    <div class="accordion-action services-image-btn collapsed"
                                        data-img="{{ asset('images/service-design.png') }}" data-bs-target="#faq-4" role="button"
                                        data-bs-toggle="collapse" aria-controls="faq-4" aria-expanded="false">
                                        <div class="accordion-title">
                                            UI/UX Design
                                            <div class="text-body-1 num">(04)</div>
                                        </div>
                                    </div>
                                    <div id="faq-4" class="collapse" data-bs-parent="#accordion-services">
                                        <div class="accordion-content">
                                            <div class="text-body-3 text-neutral-300 text">Clean and user-focused design
                                                experiences.</div>
                                            <div class="list-tags">
                                                <a href="#" class="tags-item fw-semibold">Figma</a>
                                                <a href="#" class="tags-item fw-semibold">Prototyping</a>
                                                <a href="#" class="tags-item fw-semibold">User Research</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-image effectFade fadeUp">
                            <img src="{{ asset('images/service-web.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- section-featured-works -->
            <div id="works" class="section-featured-works flat-spacing pt-0">
                <div class="container">
                    <div class="heading-section mb-0">
                        <div class="heading-sub fw-semibold mx-auto effectFade fadeUp">Selected Projects</div>
                    </div>
                    <div class="featured-works-list position-relative">
                        <div class="">
                            <div class="featured-works-item ">
                                <div class="image main-mouse-hover">
                                    <a href="#contact" class="tf-mouse view-project h6">
                                        View Project
                                        <i class="icon icon-arrow-top-right"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="bot">
                                        <h4 class="heading fw-semibold">Multi-Vendor Marketplace</h4>
                                        <div class="grid-text">
                                            <div class="item">
                                                <div class="title text-secondary">DESCRIPTION</div>
                                                <div class="text-body-3 fw-semibold">
                                                    A scalable marketplace platform where multiple vendors can sell
                                                    products online.
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="title text-secondary">DELIVERABLES</div>
                                                <div class="fw-semibold">
                                                    Vendor Panel, Payment Gateway, Order Management
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="featured-works-item ">
                                <div class="image main-mouse-hover">
                                    <a href="#contact" class="tf-mouse view-project h6">
                                        View Project
                                        <i class="icon icon-arrow-top-right"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="bot">
                                        <h4 class="heading fw-semibold">CRM Management System</h4>
                                        <div class="grid-text">
                                            <div class="item">
                                                <div class="title text-secondary">DESCRIPTION</div>
                                                <div class="text-body-3 fw-semibold">
                                                    A smart system to manage leads, customers, and business workflows
                                                    efficiently.
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="title text-secondary">DELIVERABLES</div>
                                                <div class="fw-semibold">
                                                    Lead Management, Dashboard, Automation Tools
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="featured-works-item  effectFade fadeUp no-div">
                                <div class="image main-mouse-hover">
                                    <a href="#contact" class="tf-mouse view-project h6">
                                        View Project
                                        <i class="icon icon-arrow-top-right"></i>
                                    </a>
                                </div>

                                <div class="content">
                                    <div class="bot">
                                        <h4 class="heading fw-semibold">Service Booking System</h4>
                                        <div class="grid-text">
                                            <div class="item">
                                                <div class="title text-secondary">DESCRIPTION</div>
                                                <div class="text-body-3 fw-semibold">A complete platform to manage
                                                    bookings, technicians, and services.</div>
                                            </div>
                                            <div class="item">
                                                <div class="title text-secondary">DELIVERABLES</div>
                                                <div class="fw-semibold text-body-3">Admin Panel, Mobile App, <br>
                                                    Real-time Tracking</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section-process -->
            <div class="section-process flat-spacing pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="process-heading h-100">
                                <div class="heading-section mb-80">
                                    <div class="heading-sub fw-semibold effectFade fadeUp">Process</div>
                                    <div class="heading-title text-gradient-3 effectFade fadeRotateX">From Idea <br> to
                                        Launch</div>
                                </div>
                                <div class="group-btn-slider">
                                    <div class="nav-prev-swiper">
                                        <i class="icon icon-angle-left-solid"></i>
                                    </div>
                                    <div class="nav-next-swiper">
                                        <i class="icon icon-angle-right-solid"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="process-slide">
                                <div dir="ltr" class="swiper tf-swiper swiper-box-shadow" data-preview="1.78"
                                    data-tablet="2" data-mobile-sm="1" data-mobile="1" data-loop="false"
                                    data-center="false" data-space-lg="24" data-space-md="24" data-space="30">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="process-card">
                                                <i class="icon icon-search-solid"></i>
                                                <div class="content">
                                                    <h4 class="title fw-semibold">Idea & Planning</h4>
                                                    <p class="text text-secondary">We discuss your vision and create a
                                                        clear roadmap for your software project.</p>
                                                </div>
                                                <div class="bot">
                                                    <div class="time fw-semibold">STEP 1</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="process-card">
                                                <i class="icon icon-bolt-solid"></i>
                                                <div class="content">
                                                    <h4 class="title fw-semibold">UI/UX Design</h4>
                                                    <p class="text text-secondary">Crafting intuitive and professional
                                                        designs that users will love.</p>
                                                </div>
                                                <div class="bot">
                                                    <div class="time fw-semibold">STEP 2</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="process-card">
                                                <i class="icon icon-code-solid"></i>
                                                <div class="content">
                                                    <h4 class="title fw-semibold">Development</h4>
                                                    <p class="text text-secondary">Building your product with the most
                                                        modern and scalable tech stack.</p>
                                                </div>
                                                <div class="bot">
                                                    <div class="time fw-semibold">STEP 3</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="process-card">
                                                <i class="icon icon-rocket-solid"></i>
                                                <div class="content">
                                                    <h4 class="title fw-semibold">Launch & Support</h4>
                                                    <p class="text text-secondary">Smooth deployment and ongoing support
                                                        to ensure long-term success.</p>
                                                </div>
                                                <div class="bot">
                                                    <div class="time fw-semibold">STEP 4</div>
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
            <!-- section-benefits -->
            <div class="section-benefits flat-spacing pt-0">
                <div class="container">
                    <div class="heading-section center mb-70">
                        <div class="heading-sub fw-semibold effectFade fadeUp">Benefits</div>
                        <div class="heading-title text-gradient-3 effectFade fadeRotateX">Why Choose Us</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="benefits-box text-center p-4">
                                <h6 class="fw-semibold">Clean and modern UI</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="benefits-box text-center p-4">
                                <h6 class="fw-semibold">Fast delivery</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="benefits-box text-center p-4">
                                <h6 class="fw-semibold">Scalable solutions</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="benefits-box text-center p-4">
                                <h6 class="fw-semibold">Reliable support</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section-features -->
            <div class="section-features flat-spacing pt-0">
                <div class="container">
                    <div class="heading-section center mb-64">
                        <div class="heading-sub fw-semibold effectFade fadeUp">Features</div>
                        <div class="heading-title text-gradient-3 effectFade fadeRotateX">All Features in One Place
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <div class="container z-5">
                        <div class="features-wrap justify-content-between">
                            <div class="features-col col-left lg-mb-24">
                                <div class="features-item effectFade fadeUp">
                                    <i class="icon icon-code-solid"></i>
                                    <h6 class="title fw-semibold">Clean Code Structure</h6>
                                    <p class="text-secondary">Highly maintainable and scalable codebase built for the
                                        future.</p>
                                </div>
                                <div class="features-item effectFade fadeUp">
                                    <i class="icon icon-tachometer-alt-solid"></i>
                                    <h6 class="title fw-semibold">High Performance</h6>
                                    <p class="text-secondary">Extremely fast load times and smooth user interaction.</p>
                                </div>
                                <div class="features-item effectFade fadeUp">
                                    <i class="icon icon-shield-alt-solid"></i>
                                    <h6 class="title fw-semibold">Secure System</h6>
                                    <p class="text-secondary">Enterprise-grade security standards to keep your data
                                        safe.</p>
                                </div>
                            </div>
                            <div class="features-center flex-shrink text-center">
                                <h3 class="fw-bold text-white mb-0">Bytebuzz</h3>
                            </div>
                            <div class="features-col col-right">
                                <div class="features-item effectFade fadeUp" data-delay="0.1">
                                    <i class="icon icon-mobile-alt-solid"></i>
                                    <h6 class="title fw-semibold">Mobile Responsive</h6>
                                    <p class="text-secondary">Perfect experience across all devices and screen sizes.
                                    </p>
                                </div>
                                <div class="features-item effectFade fadeUp" data-delay="0.1">
                                    <i class="icon icon-shield-alt-solid"></i>
                                    <h6 class="title fw-semibold">Easy Integration</h6>
                                    <p class="text-secondary">Seamless connection with your existing tools and APIs.</p>
                                </div>
                                <div class="features-item effectFade fadeUp" data-delay="0.1">
                                    <i class="icon icon-code-solid"></i>
                                    <h6 class="title fw-semibold">Modern Tech Stack</h6>
                                    <p class="text-secondary">Built using the latest and most reliable technologies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- section-tools -->
        <div class="section-tools flat-spacing">
            <img class="img-1 img-grow-1" src="{{ asset('images/react.svg') }}" alt="">
            <img class="img-2 img-grow-2" src="{{ asset('images/laravel.svg') }}" alt="">
            <img class="img-3 img-grow-3" src="{{ asset('images/nodejs.svg') }}" alt="">
            <img class="img-4 img-grow-4" src="{{ asset('images/mysql.svg') }}" alt="">
            <img class="img-5 img-grow-5" src="{{ asset('images/figma.svg') }}" alt="">
            <img class="img-6 img-grow-6" src="{{ asset('images/javascript.svg') }}" alt="">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8 text-center">
                        <div class="heading-section center mb-48">
                            <div class="heading-sub fw-semibold effectFade fadeUp">Stack</div>
                            <div class="heading-title text-gradient-3 effectFade fadeRotateX">We Work With Modern
                                Technologies</div>
                        </div>
                        <div class="text effectFade fadeUp h4 fw-bold">
                            React • PHP • Laravel • Node.js • MySQL • Mongodb • Figma
                        </div>
                        <a href="#contact" class="tf-btn effectFade fadeRotateX">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-black">
            <div class="light-box"></div>
            <img class="light-top" src="{{ asset('images/light-top.png') }}" alt="">
            <img class="light-bot" src="{{ asset('images/light-bot.png') }}" alt="">
            <div class="section-testimonials flat-spacing pt-0">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-10">
                            <div class="col-left">

                                <div class="heading-section mb-24">
                                    <div class="overflow-hidden">
                                        <div class="heading-sub fw-semibold style-1 effectFade fadeUp">
                                            Testimonials</div>
                                    </div>
                                    <div class="heading-title text-white effectFade fadeRotateX">
                                        What Our Clients Say</div>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="swiper-testimonial_wrap effectFade fadeUp">
                                        <div dir="ltr"
                                            class="swiper tf-swiper swiper-testimonial swiper-initialized swiper-horizontal swiper-backface-hidden">
                                            <div class="swiper-wrapper" id="swiper-wrapper-affa1122fd5062dd"
                                                aria-live="polite">
                                                <div class="swiper-slide swiper-slide-active" role="group"
                                                    aria-label="1 / 2" style="width: 1076px;">
                                                    <div>

                                                        <div class="text-body-1 text-white desc h4">
                                                            “Bytebuzz delivered a clean and fast solution for our
                                                            business. Highly recommended.”
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide swiper-slide-next" role="group"
                                                    aria-label="2 / 2" style="width: 1076px;">
                                                    <div>
                                                        <div class="text-body-1 text-white desc h4">
                                                            “Professional team with great communication and timely
                                                            delivery.”
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
                </div>
            </div>
        </div>

        <!-- section-faqs -->
        <div class="section-faqs flat-spacing pt-0">
            <div class="container">
                <div class="heading-section center mb-64">
                    <div class="heading-sub fw-semibold effectFade fadeUp">FAQs</div>
                    <div class="heading-title text-gradient-3 effectFade fadeRotateX">
                        Frequently Asked <br>Questions
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion-asked" id="accordion-asked">
                            <div class="accordion-asked-item effectFade fadeRotateX">
                                <div class="accordion-asked-title" id="asked1">
                                    <button class="accordion-button text-body-1 fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true"
                                        aria-controls="collapse1">
                                        How long does it take to complete a project?
                                        <span class="right-icon"></span>
                                    </button>
                                </div>
                                <div id="collapse1" role="region" class="accordion-collapse collapse show"
                                    aria-labelledby="asked1" data-bs-parent="#accordion-asked">
                                    <div class="accordion-body">
                                        Project timelines usually range from 5 to 15 days, depending on the complexity
                                        and requirements.
                                    </div>
                                </div>
                            </div>
                            <!-- More FAQs here... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- section-contact -->
        <div id="contact" class="flat-spacing pt-0">
            <div class="section-contact">
                <div class="contact-image">
                    <img src="{{ asset('images/contact-image-bg.jpg') }}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-left">
                                <div class="heading-section mb-48">
                                    <div class="heading-sub fw-semibold effectFade fadeUp">Contact</div>
                                    <div class="heading-title text-gradient-3 effectFade fadeRotateX">
                                        Let’s Build <br> Something Great
                                    </div>
                                </div>
                                <div>
                                    <p class="text effectFade fadeUp mb-24">Have an idea? Let’s turn it into a real
                                        product.</p>
                                    <div class="contact-item mb-20 effectFade fadeRotateX">
                                        <i class="icon icon-envelope-solid"></i>
                                        <div class="content">
                                            <div class="title fw-semibold mb-2">E-mail address</div>
                                            <div class="text">
                                                <a href="mailto:bytebuzz36@gmail.com" class="text-white">bytebuzz36@gmail.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-item effectFade fadeRotateX" data-delay="0.1">
                                        <i class="icon icon-headset-solid"></i>
                                        <div class="content">
                                            <div class="title fw-semibold mb-2">Phone number</div>
                                            <div class="text">
                                                <a href="tel:+918280886879" class="text-white">+91 8280886879</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="{{ route('contact.send') }}" method="POST" class="form-contact effectFade fadeUp">
                                @csrf
                                <h4 class="heading fw-semibold">Fill this form below</h4>
                                <fieldset class="mb-21">
                                    <label class="fw-semibold text-body-3 mb-20">Your Name</label>
                                    <input name="name" type="text" placeholder="Enter your full name" required value="{{ old('name') }}">
                                </fieldset>
                                <fieldset class="mb-21">
                                    <label class="fw-semibold text-body-3 mb-20">Your Email</label>
                                    <input name="email" type="email" placeholder="Enter your email address" required value="{{ old('email') }}">
                                </fieldset>
                                <fieldset class="mb-18">
                                    <label class="fw-semibold text-body-3 mb-0">More About The Project</label>
                                    <textarea name="message" class="" required>{{ old('message') }}</textarea>
                                </fieldset>
                                <div class="attachment d-flex gap-8 align-items-center">
                                    <i class="icon icon-paperclip-solid fs-24"></i>
                                    <div class="fw-semibold text-body-3">Add an Attachment (Optional)</div>
                                </div>
                                <button type="submit" class="tf-btn w-100">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
         <footer>
            <div class="footer-image">

            </div>
            <div class="container">
                <div class="footer-content">
                    <a href="{{ url('/') }}" class="logo-site">
                    <img src="{{ asset('images/2.png') }}" style="width: 50%;">
                </a>
                    <div class="title h6 fw-semibold">Simple. Scalable. Smart.</div>
                    <div class="tf-social-1 justify-content-center">
                        <a href="https://x.com/" target="_blank" class="text-body-1 fw-semibold">
                            Twitter / X
                            <div class="social-item">
                                <i class="icon icon-twitter-x"></i>
                            </div>
                        </a>
                        <a href="https://www.facebook.com/" target="_blank" class="text-body-1 fw-semibold">
                            Facebook
                            <div class="social-item">
                                <i class="icon icon-facebook-f"></i>
                            </div>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="text-body-1 fw-semibold">
                            Instagram
                            <div class="social-item">
                                <i class="icon icon-instagram"></i>
                            </div>
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank" class="text-body-1 fw-semibold">
                            Linkedin
                            <div class="social-item">
                                <i class="icon icon-linkedin-in"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="footer-bottom">
                    <!-- <ul class="footer-links d-flex gap-24 align-items-center">
                        <li>
                            <a href="about.html" class="fw-semibold link-underline link1">About</a>
                        </li>
                        <li>
                            <a href="service.html" class="fw-semibold link-underline link1">Services</a>
                        </li>
                        <li>
                            <a href="work.html" class="fw-semibold link-underline link1">Works</a>
                        </li>
                        <li>
                            <a href="contact.html" class="fw-semibold link-underline link1">Contact</a>
                        </li>
                    </ul> -->
                    <p class="text-secondary coppy-rights text-center">Bytebuzz © 2026. Simple. Scalable. Smart.</p>
                    <a href="#" class="action-go-top d-flex gap-8 align-items-center justify-content-end link1">
                        <span class="fw-semibold">Back to top</span>
                        <i class="icon icon-long-arrow-alt-up-solid fs-20"></i>
                    </a>
                </div>
            </div>
        </footer>
    </main>

    <!-- Javascript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/countto.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/infinityslide.js') }}"></script>
    <script src="{{ asset('js/ScrollSmooth.js') }}"></script>
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('js/gsapAnimation.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Sent!',
                text: "{{ session('success') }}",
                background: '#18181b',
                color: '#fff',
                confirmButtonColor: '#2563eb',
                iconColor: '#22c55e'
            });
        @endif

        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ session('error') }}",
                background: '#18181b',
                color: '#fff',
                confirmButtonColor: '#ef4444'
            });
        @endif
    </script>
</body>
</html>
