@extends('index')
@section('title', 'Powerful, yet simple enterprise resource planning | Aeure')
@section('description', 'Looking for state-of-the-art enterprise resource planning? Look no further, Aeure is your next logical step towards better business workflow. Get it now!')
@section('content')


<div class="content-wrapper">
    <div class="header-spacer"></div>
<!-- Main Slider -->

    <div class="container-full-width">
            <div class="swiper-container main-slider" data-effect="fade" data-autoplay="4000">

                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide bg-border-color">

                        <div class="container">
                            <div class="row table-cell">

                                <div class="col-lg-12">

                                    <div class="slider-content align-center">

                                        <h1 class="slider-content-title" data-swiper-parallax="-100">Accounting, Inventory and Beyond</h1>
                                        <h5 class="slider-content-text c-gray" data-swiper-parallax="-200">Aeure covers all the features you need to
                                            run a small or medium business.</h5>

                                        <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                            <a href="{{ url('demo') }}"
                                               class="btn btn-medium btn--dark btn-hover-shadow">
                                                <span class="text">Try Demo</span>
                                                <span class="semicircle"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
                                        <img src="img/slider1.png" alt="slider">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide bg-primary-color main-slider-bg-dark thumb-left">

                        <div class="container table full-height">
                            <div class="row table-cell">

                                <div class="col-lg-5 table-cell">
                                    <div class="slider-content">
                                        <h3 class="slider-content-title" data-swiper-parallax="-100"><span class="c-dark">Expert Support</span></h3>
                                        <h6 class="slider-content-text" data-swiper-parallax="-200">
                                            Our awesome support team is ready to help you get started on the Aeure Cloud. Support is also available for local installations.


                                        </h6>

                                        {{--<div class="main-slider-btn-wrap" data-swiper-parallax="-300">--}}

                                            {{--<a href="05_service_details_localseo.html"--}}
                                               {{--class="btn btn-medium btn--dark btn-hover-shadow">--}}
                                                {{--<span class="text">learn more</span>--}}
                                                {{--<span class="semicircle"></span>--}}
                                            {{--</a>--}}

                                            {{--<a href="05_service_details_localseo.html" class="btn btn-small btn--primary"--}}
                                               {{--data-swiper-parallax="-300">--}}
                                                {{--<span class="text">Our Services</span>--}}
                                                {{--<i class="seoicon-right-arrow"></i>--}}
                                            {{--</a>--}}

                                        {{--</div>--}}

                                    </div>
                                </div>

                                <div class="col-lg-7 table-cell">
                                    <div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
                                        <img src="img/slider2.png" alt="slider">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-secondary-color main-slider-bg-dark">

                        <div class="container table full-height">
                            <div class="row table-cell">
                                <div class="col-lg-6 table-cell">

                                    <div class="slider-content">

                                        <h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">Amazing Community
                                        </h3>

                                        <h5 class="slider-content-text" data-swiper-parallax="-200">Our forum is the hub of activity related to Aeure.
                                            You can ask a question, find help or hire service providers.
                                        </h5>

                                        {{--<div class="main-slider-btn-wrap" data-swiper-parallax="-300">--}}

                                            {{--<a href="06_service_detail.html" class="btn btn-medium btn--dark btn-hover-shadow">--}}
                                                {{--<span class="text">learn more</span>--}}
                                                {{--<span class="semicircle"></span>--}}
                                            {{--</a>--}}

                                            {{--<a href="06_service_detail.html" class="btn btn-medium btn-border">--}}
                                                {{--<span class="text">GET STARTED</span>--}}
                                                {{--<span class="semicircle"></span>--}}
                                            {{--</a>--}}

                                        {{--</div>--}}

                                    </div>

                                </div>
                                <div class="col-lg-6 table-cell">
                                    <div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
                                        <img src="img/slider3.png" alt="slider">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{--<div class="swiper-slide bg-orange-color main-slider-bg-dark">--}}
                        {{--<div class="container table full-height">--}}
                            {{--<div class="row table-cell">--}}

                                {{--<div class="col-lg-12">--}}

                                    {{--<div class="slider-content align-center">--}}
                                        {{--<h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">Email--}}
                                            {{--Marketing</h3>--}}
                                        {{--<h5 class="slider-content-text" data-swiper-parallax="-200">We create tailored marketing--}}
                                            {{--campaigns for each segment--}}
                                            {{--of your audience to help advertise products and services in efforts to efficiently--}}
                                            {{--and effectively engage new customers.--}}
                                        {{--</h5>--}}

                                        {{--<div class="main-slider-btn-wrap" data-swiper-parallax="-300">--}}

                                            {{--<a href="07_service_email_marketing.html"--}}
                                               {{--class="btn btn-medium btn--dark btn-hover-shadow">--}}
                                                {{--<span class="text">learn more</span>--}}
                                                {{--<span class="semicircle"></span>--}}
                                            {{--</a>--}}

                                        {{--</div>--}}

                                    {{--</div>--}}

                                {{--</div>--}}

                                {{--<div class="col-lg-12">--}}
                                    {{--<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">--}}
                                        {{--<img src="img/slider4.png" alt="slider">--}}
                                    {{--</div>--}}

                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="swiper-slide bg-green-color main-slider-bg-dark">--}}

                        {{--<div class="container table full-height">--}}
                            {{--<div class="row table-cell">--}}

                                {{--<div class="col-lg-6 table-cell">--}}
                                    {{--<div class="slider-content">--}}

                                        {{--<h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">Pay Per Click--}}
                                            {{--(PPC)--}}
                                            {{--Management--}}
                                        {{--</h3>--}}

                                        {{--<h5 class="slider-content-text" data-swiper-parallax="-200">Pay Per Click has an instant--}}
                                            {{--impact and gives--}}
                                            {{--your brand a much larger reach and exposure as a result of first page exposure on--}}
                                            {{--major search engines.--}}
                                        {{--</h5>--}}

                                        {{--<div class="main-slider-btn-wrap" data-swiper-parallax="-300">--}}

                                            {{--<a href="08_service_ppc_management.html"--}}
                                               {{--class="btn btn-medium btn--dark btn-hover-shadow">--}}
                                                {{--<span class="text">learn more</span>--}}
                                                {{--<span class="semicircle"></span>--}}
                                            {{--</a>--}}

                                            {{--<a href="08_service_ppc_management.html"--}}
                                               {{--class="btn btn-medium btn-border btn-hover-shadow">--}}
                                                {{--<span class="text">GET STARTED</span>--}}
                                                {{--<span class="semicircle"></span>--}}
                                            {{--</a>--}}

                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="col-lg-6 table-cell">--}}
                                    {{--<div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">--}}
                                        {{--<img src="img/slider5.png" alt="slider">--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>

                <!--Prev next buttons-->

                <svg class="btn-next btn-next-black">
                    <use xlink:href="#arrow-right"></use>
                </svg>

                <svg class="btn-prev btn-prev-black">
                    <use xlink:href="#arrow-left"></use>
                </svg>

                <!--Pagination tabs-->

                <div class="slider-slides">
                    <a href="#" class="slides-item bg-border-color main-slider-bg-light">
                        <div class="content">
                            <div class="text-wrap">
                                <h4 class="slides-title">Aeure</h4>
                            </div>
                            <div class="slides-number">01</div>
                        </div>
                    </a>

                    <a href="#" class="slides-item bg-primary-color">
                        <div class="content">
                            <div class="text-wrap">
                                <h4 class="slides-title">Expert Support</h4>
                                {{--<div class="slides-sub-title">Mirum est notare quam littera.</div>--}}
                            </div>
                            <div class="slides-number">02</div>
                        </div>
                    </a>

                    <a href="#" class="slides-item bg-secondary-color">
                        <div class="content">
                            <div class="text-wrap">
                                <h4 class="slides-title">Amazing Community</h4>
                            </div>
                            <div class="slides-number">03</div>
                        </div>
                    </a>

                    {{--<a href="#" class="slides-item bg-orange-color">--}}
                        {{--<div class="content">--}}
                            {{--<div class="text-wrap">--}}
                                {{--<h4 class="slides-title">Email Marketing</h4>--}}
                            {{--</div>--}}
                            {{--<div class="slides-number">04</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}

                    {{--<a href="#" class="slides-item bg-green-color">--}}
                        {{--<div class="content">--}}
                            {{--<div class="text-wrap">--}}
                                {{--<h4 class="slides-title">Pay Per Click Management</h4>--}}
                            {{--</div>--}}
                            {{--<div class="slides-number">05</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                </div>
            </div>
    </div>


<!-- ... End Main Slider -->


<!-- Info-Box -->

<div class="container info-boxes pt100 pb100">

    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box--standard" data-mh="info-boxes">
                <div class="info-box-image">
                    <img src="img/info-box6.png" alt="image">
                </div>
                <div class="info-box-content">
                    <h5 class="info-box-title">Server Management</h5>
                    <p class="text">Let us lose sleep over your infrastructure. We have years of experiences ensuring that your servers are up and running at optimium levels.

                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box--standard" data-mh="info-boxes">
                <div class="info-box-image">
                    <img src="img/info-box6.png" alt="image">
                </div>
                <div class="info-box-content">
                    <h5 class="info-box-title">Redundancy</h5>
                    <p class="text">Aeure Cloud uses a Master-Slave system, so each server has a live twin that will ensure that chances of losing data are bare minimum.

                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box--standard" data-mh="info-boxes">
                <div class="info-box-image">
                    <img src="img/info-box6.png" alt="image">
                </div>
                <div class="info-box-content">
                    <h5 class="info-box-title">Upgrade Management</h5>
                    <p class="text">Don't worry about keeping updated with the latest security and performance upgrades, we ensure that your Aeure instance is patched and up-to-date.

                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box--standard" data-mh="info-boxes">
                <div class="info-box-image">
                    <img src="img/info-box6.png" alt="image">
                </div>
                <div class="info-box-content">
                    <h5 class="info-box-title">Priority Support</h5>
                    <p class="text">Our support team knows Aeure inside out and has tons of experience dealing with all kinds of scenarios, and responds very quickly.

                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box--standard" data-mh="info-boxes">
                <div class="info-box-image">
                    <img src="img/info-box6.png" alt="image">
                </div>
                <div class="info-box-content">
                    <h5 class="info-box-title">Bug Fix Guarantee</h5>
                    <p class="text">If you report a bug in a standard feature, we will guarantee that it will be fixed with highest priority and automatically patched and released for you.

                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box--standard" data-mh="info-boxes">
                <div class="info-box-image">
                    <img src="img/info-box6.png" alt="image">
                </div>
                <div class="info-box-content">
                    <h5 class="info-box-title">Configuration Support</h5>
                    <p class="text">If you are implementing Aeuer, our support team will help you map your business process with Aeure workflows and help you setup your system.

                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box--standard" data-mh="info-boxes">
                <div class="info-box-image">
                    <img src="img/info-box6.png" alt="image">
                </div>
                <div class="info-box-content">
                    <h5 class="info-box-title">Email Service</h5>
                    <p class="text">With aeure.com you don't have to worry your transaction emails reach your recipients as we automatically route your emails via Mailgun.


                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box--standard" data-mh="info-boxes">
                <div class="info-box-image">
                    <img src="img/info-box6.png" alt="image">
                </div>
                <div class="info-box-content">
                    <h5 class="info-box-title">Offsite Backups</h5>
                    <p class="text">Your instance on aeure.com is automatically backed up on Aeure & Amazon S3 so that you can be doubly assured of your data.

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box--standard" data-mh="info-boxes">
                <div class="info-box-image">
                    <img src="img/info-box6.png" alt="image">
                </div>
                <div class="info-box-content">
                    <h5 class="info-box-title">Scalability Support</h5>
                    <p class="text">As your business grows, you may experience scalability issues. We will ensure we try and fix them so that you do not experience slow performance.

                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- ... End Info-Box -->


<!-- SEO-Score -->

<div class="container-fluid">
    <div class="row">

        <div class="seo-score scrollme">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
                        <div class="seo-score-content align-center">

                            <div class="heading align-center">
                                <h4 class="h1 heading-title">Start your free trial</h4>
                                <p class="heading-text">Enter your email to get 30 days of Aeure absolutely free, without any limitations.</p>
                            </div>

                            <div class="seo-score-form">

                                <form class="seo-score-form input-inline" method="post" action="send_mail.php">

                                    <div class="row">
                                        <div class="col-lg-7 no-padding col-md-12 col-xs-12 col-sm-12">
                                            <input name="email" class="input-dark site" required="required" placeholder="Your Email" type="email">
                                        </div>
                                        <div class="col-lg-5 no-padding col-md-12 col-xs-12 col-sm-12">
                                            <input name="company" class="input-dark e-mail" required="required" placeholder="Company name" type="text">
                                        </div>
                                    </div>

                                    <button class="btn btn-medium btn--green btn-hover-shadow">
                                        <span class="text">Get Started</span>
                                        <span class="semicircle"></span>
                                    </button>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="images">
                <img src="img/seoscore1.png" alt="image">
                <img src="img/seoscore2.png" alt="image">
                <img src="img/seoscore3.png" alt="image">
            </div>

        </div>
    </div>
</div>

<!-- ... End SEO-Score -->


<!-- Offers -->

<div class="container">
    <div class="row medium-padding120">
        <div class="col-lg-12">
            <div class="offers">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="heading">
                            <h4 class="h1 heading-title">We Offer a Full Range of Digital
                                Marketing Services!</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="heading">
                            <p class="heading-text">Claritas est etiam processus dynamicus, qui sequitur
                                mutationem consuetudium.
                            </p>
                        </div>

                        <ul class="list list--secondary">
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh;</a>
                            </li>
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Investigationes demonstraverunt;</a>
                            </li>
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Dam liber tempor cum soluta nobis eleifend option congue nihil;</a>
                            </li>
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Quarta decima et quinta.</a>
                            </li>
                        </ul>

                        <a href="03_services.html" class="btn btn-medium btn-border c-primary">
                            <span class="text">Learn More</span>
                            <span class="semicircle"></span>
                        </a>

                        <a href="10_testimonials.html" class="btn btn-medium btn--primary btn-hover-shadow">
                            <span class="text">Get a Quote</span>
                            <span class="semicircle"></span>
                        </a>

                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="offers-thumb">
                            <img src="img/offers1.png" alt="offers">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... End Offers -->


<!-- Our-video -->

<div class="container-fluid">
    <div class="row">
        <div class="our-video js-equal-child">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding">
                <div class="video theme-module">
                    <div class="video-thumb">
                        <div class="overlay"></div>
                        <a href="https://www.youtube.com/watch?v=0O2aH4XLbto" class="video-control js-popup-iframe">
                            <img src="svg/video-control.svg" alt="go">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12 no-padding">
                <div class="content theme-module centered-on-mobile medium-padding100">
                    <div class="heading">
                        <h4 class="h1 heading-title">Watch Our Video</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                        <p class="heading-text">Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber
                            tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta.
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                            nisl ut aliquip ex ea commodo consequat eleifend option nihil.
                        </p>
                    </div>
                    <a href="02_abouts.html" class="btn btn-medium btn--secondary">
                        <span class="text">About Us</span>
                        <span class="semicircle"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... End Offers -->


<!-- Background-mountains -->

<div class="container-fluid">
    <div class="row">
        <div class="background-mountains medium-padding120 scrollme">

            <div class="images">
                <img src="img/mountain1.png" alt="mountain">
                <img src="img/mountain2.png" alt="mountain">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="heading align-center">
                            <h4 class="h1 heading-title">Affordable SEO Services Packages</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                            <p class="heading-text">Claritas est etiam processus dynamicus, qui sequitur mutationem
                                consuetudium.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box--standard-centered">
                            <div class="info-box-image">
                                <img src="img/info-box7.png" alt="image">
                            </div>
                            <div class="info-box-content">
                                <h4 class="info-box-title">Objective</h4>
                                <p class="text">Investigationes demonstraverunt lectores legere.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box--standard-centered">
                            <div class="info-box-image">
                                <img src="img/info-box8.png" alt="image">
                            </div>
                            <div class="info-box-content">
                                <h4 class="info-box-title">Strategy</h4>
                                <p class="text">Dolor sit amet, consectetuer adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box--standard-centered">
                            <div class="info-box-image">
                                <img src="img/info-box9.png" alt="image">
                            </div>
                            <div class="info-box-content">
                                <h4 class="info-box-title">Technology</h4>
                                <p class="text">Nam liber tempor cum soluta nobis eleifend.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box--standard-centered">
                            <div class="info-box-image">
                                <img src="img/info-box10.png" alt="image">
                            </div>
                            <div class="info-box-content">
                                <h4 class="info-box-title">Analytics</h4>
                                <p class="text">Eodem modo typi, qui nunc nobis videntur parum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-center">
                    <div class="btn-block">
                        <a href="03_services.html" class="btn btn-medium btn--dark">
                            <span class="text">More Info</span>
                            <span class="semicircle"></span>
                        </a>
                        <a href="03_services.html" class="btn btn-medium btn--breez">
                            <span class="text">Get Started!</span>
                            <span class="semicircle"></span>
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>

<!-- End Background-mountains -->


<!-- Counters -->

<div class="container-fluid">
    <div class="row bg-green-color">
        <div class="container">
            <div class="row">
                <div class="counters">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="counter-item">
                            <div class="counter-numbers counter">
                                <span data-speed="2000" data-refresh-interval="3" data-to="3000" data-from="0">3000</span>
                            </div>
                            <span class="counter-title">Companies</span>
                            <div class="counter-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                        <div class="counter-item">
                            <div class="counter-numbers counter">
                                <span data-speed="2000" data-refresh-interval="3" data-to="10" data-from="0">10</span>
                            </div>
                            <span class="counter-title">Years of Development</span>
                            <div class="counter-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="counter-item">
                            <div class="counter-numbers counter">
                                <span data-speed="2000" data-refresh-interval="3" data-to="9" data-from="2">9</span>
                            </div>
                            <span class="counter-title">Domains</span>
                            <div class="counter-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="counter-item">
                            <div class="counter-numbers counter">
                                <span data-speed="2000" data-refresh-interval="3" data-to="36" data-from="400">36</span>
                            </div>
                            <span class="counter-title">Modules</span>
                            <div class="counter-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Counters -->


<!-- Testimonial-slider -->

<div class="container-fluid">
    <div class="row">
        <div class="testimonial-slider scrollme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="heading">
                            <h4 class="h1 heading-title">Happy Clients
                                About Us</h4>
                            <div class="heading-line">
                                <span class="short-line bg-yellow-color"></span>
                                <span class="long-line bg-yellow-color"></span>
                            </div>
                            <p class="heading-text c-white">Claritas est etiam processus dynamicus, qui lectorum.
                            </p>
                        </div>
                        <div class="signature js-animate-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="60">
                                <path fill="none" stroke="#2f2c2c" stroke-width="1.4"
                                      d="M24.78 42.5C11.28 41.06.96 36 1.16 26.86 1.62 11.6 16.76 3.6 28.13 3.25c5.44-.16 9.8 2.38 10.2 5.8.86 7.66-19.23 15.62-19.23 15.62s17.86-6.57 24.66 2.2c2.8 3.6-11.8 10.65-11.8 10.65s-8.8 3.35-7.65-.24c1.78-5.52 16.8-10.1 18.42-10.3 3.17-.4 7.1-.4 8 .12 1.33.78-1.7 4.14-.94 4.86.76.72 3.82-2.55 3.94-1.97.12.57-.64 2.63.58 3 1.2.38 2.3-1.1 4.28-1.5 1.97-.4 1.83-.44 3.6-.12 1.76.32 2.1.64 3.47 1.4 1.36.74.86 2.22 1.96 1.6 1.1-.6 1.43-4.16 2.44-4.04 1.02.1.03 5.38 1.63 4.5 1.6-.85 4.74-7.97 4.74-7.97s-.82 4.04 0 3.93c3.14-.4 8.12-2.57 14.48-3.36 6.37-.78 8.67-.35 11 .24 1.92.48 2.67 2.3 2.67 2.3"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                <path fill="none" stroke="#2f2c2c" stroke-width="1.4"
                                      d="M113.7 15.75s-1.1-2.78-3.6-2.08c-5.83 1.62-16.2 7.68-16.44 15.63-.46 16.3 21.1 11.14 22.7 11 13.6-1.2 17.38-9.96 17.36-14.48-.06-14.3-19.07-10.3-21.07-10.07-7.9.92-10.48 1.57-10.48 1.57"></path>
                                <path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M119.7 1.05c-2.53 13.9-5.1 27.83-2.53 41.44" stroke-linecap="round"></path>
                                <path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M133.6 27.8c-6.62-.42-12.6.37-17.36 3.35"></path>
                                <path fill="none" stroke="#2f2c2c" stroke-width="1.4"
                                      d="M131.52 32.77s3.95-.13 8.34-.93c2.4-.43 5-1.73 7.87-1.85 2.87-.12 1.74 1.44 3.6 1.38 4.62-.14 7.98-.3 14.92-.7 6.95-.4 9.76-2.76 12.86-.92 1.7 1 1.4 3.13 1.4 3.13"
                                      stroke-linecap="round"></path>
                                <path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M153.52 31.03s2.27-2.74-.7-3.35c-3.36-.7-3.7 2.43-3.7 2.43"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="col-lg-7 col-lg-offset-1 col-md-8 col-sm-12 col-xs-12">

                        <div class="testimonial-item">
                            <!-- Slider main container -->
                            <div class="swiper-container testimonial__thumb overflow-visible" data-effect="fade" data-loop="false">

                                <div class="swiper-wrapper">
                                    <div class="testimonial-slider-item swiper-slide">
                                        <div class="testimonial-content">
                                            <p class="text" data-swiper-parallax="-200">Nam liber tempor cum soluta nobis eleifend option congue
                                                nihil imperdiet doming id quod mazim.
                                            </p>
                                            <a href="#" class="author" data-swiper-parallax="-150">Jonathan Simpson</a>
                                            <a href="#" class="company" data-swiper-parallax="-150">Envato Market</a>

                                        </div>
                                        <div class="avatar" data-swiper-parallax="-50">
                                            <img src="img/avatar.png" alt="avatar">
                                        </div>
                                    </div>
                                    <div class="testimonial-slider-item swiper-slide">
                                        <div class="testimonial-content">
                                            <p class="text" data-swiper-parallax="-200">Nam liber tempor cum soluta nobis eleifend option congue
                                                nihil imperdiet doming id quod mazim.
                                            </p>
                                            <a href="#" class="author" data-swiper-parallax="-150">Jonathan Simpson</a>
                                            <a href="#" class="company" data-swiper-parallax="-150">Envato Market</a>

                                        </div>
                                        <div class="avatar" data-swiper-parallax="-50">
                                            <img src="img/avatar.png" alt="avatar">
                                        </div>
                                    </div>
                                    <div class="testimonial-slider-item swiper-slide">
                                        <div class="testimonial-content">
                                            <p class="text" data-swiper-parallax="-200">Nam liber tempor cum soluta nobis eleifend option congue
                                                nihil imperdiet doming id quod mazim.
                                            </p>
                                            <a href="#" class="author" data-swiper-parallax="-150">Jonathan Simpson</a>
                                            <a href="#" class="company" data-swiper-parallax="-150">Envato Market</a>

                                        </div>
                                        <div class="avatar" data-swiper-parallax="-50">
                                            <img src="img/avatar.png" alt="avatar">
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>

                                <div class="quote">
                                    <i class="seoicon-quotes"></i>
                                </div>
                            </div>

                            <div class="testimonial__thumb-img">
                                <img src="img/testimonial1.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-img">
                <img src="img/testimonial2.png" alt="image">
            </div>
        </div>
    </div>
</div>

<!-- End Testimonial-slider -->


<!-- Post-slider -->

<div class="container">

    <div class="recent-post-slider medium-padding120">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="heading">
                    <h4 class="h1 heading-title">Latest From the Blog</h4>
                    <a href="14_blog.html" class="read-more">Read Our Blog
                        <i class="seoicon-right-arrow"></i>
                    </a>
                    <div class="heading-line">
                        <span class="short-line"></span>
                        <span class="long-line"></span>
                    </div>
                </div>
            </div>

        </div>

        <div class="theme-module news-slider-module">
            <div class="swiper-container top-pagination" data-show-items="3" data-scroll-items="3">

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <article class="hentry post">

                            <time class="post__date published " datetime="2016-01-30 12:00:00">
                                January 30, 2016
                            </time>

                            <div class="post__content">
                                <h2 class="post__title entry-title">
                                    <a href="15_blog_details.html">Qemonstraverunt legere lius</a>
                                </h2>

                                <p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

                            </div>

                            <div class="post__author author vcard">
                                <div class="post-avatar">
                                    <img src="img/post-author1.png" alt="author">
                                </div>
                                <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                            </div>

                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="hentry post">

                            <time class="post__date published " datetime="2016-01-30 12:00:00">
                                January 30, 2016
                            </time>

                            <div class="post__content">
                                <h2 class="post__title entry-title">
                                    <a href="15_blog_details.html">Qemonstraverunt legere lius</a>
                                </h2>

                                <p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

                            </div>

                            <div class="post__author author vcard">
                                <div class="post-avatar">
                                    <img src="img/post-author2.png" alt="author">
                                </div>
                                <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                            </div>

                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="hentry post">

                            <time class="post__date published " datetime="2016-01-30 12:00:00">
                                January 30, 2016
                            </time>

                            <div class="post__content">
                                <h2 class="post__title entry-title">
                                    <a href="15_blog_details.html">Qemonstraverunt legere lius</a>
                                </h2>

                                <p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

                            </div>

                            <div class="post__author author vcard">
                                <div class="post-avatar">
                                    <img src="img/post-author3.png" alt="author">
                                </div>
                                <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                            </div>

                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="hentry post">

                            <time class="post__date published " datetime="2016-01-30 12:00:00">
                                January 30, 2016
                            </time>

                            <div class="post__content">
                                <h2 class="post__title entry-title">
                                    <a href="15_blog_details.html">Qemonstraverunt legere lius</a>
                                </h2>

                                <p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

                            </div>

                            <div class="post__author author vcard">
                                <div class="post-avatar">
                                    <img src="img/post-author1.png" alt="author">
                                </div>
                                <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                            </div>

                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="hentry post">

                            <time class="post__date published " datetime="2016-01-30 12:00:00">
                                January 30, 2016
                            </time>

                            <div class="post__content">
                                <h2 class="post__title entry-title">
                                    <a href="15_blog_details.html">Qemonstraverunt legere lius</a>
                                </h2>

                                <p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

                            </div>

                            <div class="post__author author vcard">
                                <div class="post-avatar">
                                    <img src="img/post-author2.png" alt="author">
                                </div>
                                <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                            </div>

                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="hentry post">

                            <time class="post__date published " datetime="2016-01-30 12:00:00">
                                January 30, 2016
                            </time>

                            <div class="post__content">
                                <h2 class="post__title entry-title">
                                    <a href="15_blog_details.html">Qemonstraverunt legere lius</a>
                                </h2>

                                <p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

                            </div>

                            <div class="post__author author vcard">
                                <div class="post-avatar">
                                    <img src="img/post-author3.png" alt="author">
                                </div>
                                <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                            </div>

                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="hentry post">

                            <time class="post__date published " datetime="2016-01-30 12:00:00">
                                January 30, 2016
                            </time>

                            <div class="post__content">
                                <h2 class="post__title entry-title">
                                    <a href="15_blog_details.html">Qemonstraverunt legere lius</a>
                                </h2>

                                <p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

                            </div>

                            <div class="post__author author vcard">
                                <div class="post-avatar">
                                    <img src="img/post-author1.png" alt="author">
                                </div>
                                <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                            </div>

                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="hentry post">

                            <time class="post__date published " datetime="2016-01-30 12:00:00">
                                January 30, 2016
                            </time>

                            <div class="post__content">
                                <h2 class="post__title entry-title">
                                    <a href="15_blog_details.html">Qemonstraverunt legere lius</a>
                                </h2>

                                <p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>

                            </div>

                            <div class="post__author author vcard">
                                <div class="post-avatar">
                                    <img src="img/post-author2.png" alt="author">
                                </div>
                                <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                            </div>

                        </article>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- End Post-slider -->


<!-- Clients -->

<div class="section">
    <div class="client-carousel medium-padding120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                    <div class="heading align-center">
                        <h4 class="h1 heading-title">Our Valuable Clients</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                        <p class="heading-text">Qui mutationem consuetudium. </p>
                    </div>
                </div>
            </div>

            <div class="theme-module clients-slider-module">

                <div class="swiper-container pagination-bottom" data-show-items="4">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide client-item">
                            <a href="09_our_clients.html" class="client-image">
                                <img src="img/client1-hover.png" alt="logo" class="hover">
                            </a>
                        </div>

                        <div class="swiper-slide client-item">
                            <a href="09_our_clients.html" class="client-image">
                                <img src="img/client2-hover.png" alt="logo" class="hover">
                            </a>
                        </div>

                        <div class="swiper-slide client-item">
                            <a href="09_our_clients.html" class="client-image">
                                <img src="img/client3-hover.png" alt="logo" class="hover">
                            </a>
                        </div>

                        <div class="swiper-slide client-item">
                            <a href="09_our_clients.html" class="client-image">
                                <img src="img/client4-hover.png" alt="logo" class="hover">
                            </a>
                        </div>

                    </div>

                    <!--Prev Next Arrows-->
                    <svg class="btn-next">
                        <use xlink:href="#arrow-right"></use>
                    </svg>

                    <svg class="btn-prev">
                        <use xlink:href="#arrow-left"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Clients -->


<!-- Subscribe Form -->

<div class="container-fluid bg-green-color">
    <div class="row">
        <div class="container">

            <div class="row">

                <div class="subscribe scrollme">

                    <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                        <h4 class="subscribe-title">Email Newsletters!</h4>
                        <form class="subscribe-form" method="post" action="import.php">
                            <input class="email input-standard-grey input-white" name="email" required="required" placeholder="Your Email Address" type="email">
                            <button class="subscr-btn">subscribe
                                <span class="semicircle--right"></span>
                            </button>
                        </form>
                        <div class="sub-title">Sign up for new Aeure content, updates, surveys & offers.</div>

                    </div>

                    <div class="images-block">
                        <img src="img/subscr-gear.png" alt="gear" class="gear">
                        <img src="img/subscr1.png" alt="mail" class="mail">
                        <img src="img/subscr-mailopen.png" alt="mail" class="mail-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Subscribe Form -->
</div>
@endsection
