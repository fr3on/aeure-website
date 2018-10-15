@extends('index')
@section('title', 'Healthcare Domain | Aeure')
@section('description', 'Aeure Healthcare modules helps you manage patients, appointments, consultations and lab tests along with billing and all the other Aeure goodies.')
@section('content')
    <div class="header-spacer"></div>
    <div class="content-wrapper">

        <!-- Stunning Header -->

        <div class="stunning-header stunning-header-bg-red">
            <div class="stunning-header-content">
                <h1 class="stunning-header-title">Healthcare Domain</h1>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs-item">
                        <a href="{{ url('/') }}">Home</a>
                        <i class="seoicon-right-arrow"></i>
                        <a href="{{ url('industries') }}">Industries</a>
                        <i class="seoicon-right-arrow"></i>
                    </li>
                    <li class="breadcrumbs-item active">
                        <span href="#">Healthcare</span>
                        <i class="seoicon-right-arrow"></i>
                    </li>
                </ul>
            </div>
        </div>

        <!-- End Stunning Header -->

        <!-- Overlay Search -->

        <div class="overlay_search">
            <div class="container">
                <div class="row">
                    <div class="form_search-wrap">
                        <form>
                            <input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
                            <a href="#" class="overlay_search-close">
                                <span></span>
                                <span></span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Overlay Search -->
        <div class="container-fluid">
            <div class="row medium-padding120 bg-border-color">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="heading mb30">
                                <h4 class="h1 heading-title">Healthcare</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>

                                <h5 class="heading-subtitle">Aeure Healthcare modules helps you manage patients, appointments, consultations and lab tests along with billing and all the other Aeure goodies.
                                </h5>

                            </div>

                            <ul class="list list--secondary mb60">
                                <li>
                                    <i class="seoicon-check"></i>
                                    <a href="#">Patient Data
                                    </a>
                                </li>

                                <li>
                                    <i class="seoicon-check"></i>
                                    <a href="#">Appointments
                                    </a>
                                </li>

                                <li>
                                    <i class="seoicon-check"></i>
                                    <a href="#">Consultations
                                    </a>
                                </li>

                                <li>
                                    <i class="seoicon-check"></i>
                                    <a href="#">Lab Tests
                                    </a>
                                </li>
                            </ul>

                            <a href="{{ url('demo')  }}" class="btn btn-medium btn--dark btn-hover-shadow mb30">
                                <span class="text">Demo</span>
                                <span class="semicircle"></span>
                            </a>
                        </div>

                        <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                            <img src="svg/healthcare.svg" alt="social">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pie charts -->

        <div class="container">
            <div class="row pt120">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading mb60">
                        <h4 class="h1 heading-title">Grow your business</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>

                        <h5 class="heading-subtitle">Qumonstraverunt lectores legere me lius saepius.</h5>

                    </div>
                </div>
            </div>

            <div class="row mb60">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="pie-chart-item">
                        <div class="pie-chart" data-value="0.99" data-start-color="#b9750f" data-end-color="#fc9700">
                            <div class="content"><span>99</span>%</div>
                        </div>

                        <div class="pie-chart-content">
                            <h4 class="pie-chart-content-title">Patient Data</h4>
                            <p class="pie-chart-content-text">Keep track of all patients, their history and other critical parameters.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="pie-chart-item">
                        <div class="pie-chart"  data-value="0.99" data-start-color="#298355" data-end-color="#3cb879">
                            <div class="content"><span>99</span>%</div>
                        </div>

                        <div class="pie-chart-content">
                            <h4 class="pie-chart-content-title">Appointments</h4>
                            <p class="pie-chart-content-text">Maintain a schedule of all your physicians and track appointment bookings for them.



                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb60">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="pie-chart-item">
                        <div class="pie-chart"  data-value="0.99" data-start-color="#3b8d8c" data-end-color="#4cc3c1">
                            <div class="content"><span>99</span>%</div>
                        </div>

                        <div class="pie-chart-content">
                            <h4 class="pie-chart-content-title">Consultations</h4>
                            <p class="pie-chart-content-text">Record all observations, assessments and prescriptions of all patient consultations.


                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="pie-chart-item">
                        <div class="pie-chart"  data-value="0.99" data-start-color="#cc481d" data-end-color="#f15927">
                            <div class="content"><span>99</span>%</div>
                        </div>

                        <div class="pie-chart-content">
                            <h4 class="pie-chart-content-title">Lab Tests
                            </h4>
                            <p class="pie-chart-content-text">Manage all Lab Tests along with specimens and resultes and keep them ready for print.



                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mb60">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="pie-chart-item">
                        <div class="pie-chart"  data-value="0.99" data-start-color="#3b8d8c" data-end-color="#4cc3c1">
                            <div class="content"><span>99</span>%</div>
                        </div>

                        <div class="pie-chart-content">
                            <h4 class="pie-chart-content-title">Patient Billing</h4>
                            <p class="pie-chart-content-text">Track all things financial, including billings and payments with the Aeure accounts module.


                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="pie-chart-item">
                        <div class="pie-chart"  data-value="0.99" data-start-color="#cc481d" data-end-color="#f15927">
                            <div class="content"><span>99</span>%</div>
                        </div>

                        <div class="pie-chart-content">
                            <h4 class="pie-chart-content-title">Stock and Inventory</h4>
                            <p class="pie-chart-content-text">Aeure stock module will help you manage inventory and procurement across warehouses.



                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- End Pie charts -->
        <!-- Testimonials slider -->

        <div class="container-fluid">
            <div class="row medium-padding120 bg-border-color">
                <div class="container">

                    <div class="testimonial-arrow-slider">

                        <div class="row">

                            <div class="col-lg-12">
                                <div class="heading">
                                    <h4 class="h1 heading-title">Our Customers Say</h4>
                                    {{--<a href="#" class="read-more">Read All Testimonial--}}
                                        {{--<i class="seoicon-right-arrow"></i>--}}
                                    {{--</a>--}}
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-container pagination-bottom">

                            <div class="swiper-wrapper">

                                <div class="case-slider-item swiper-slide">

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <div class="testimonial-item testimonial-arrow mb30">
                                            <div class="testimonial-text">
                                                Investigationes demonstraverunt lectores legere me lius quod ii legunt.
                                            </div>

                                            <div class="author-info-wrap table">
                                                <div class="testimonial-img-author table-cell">
                                                    <img src="img/avatar.png" alt="author">
                                                </div>
                                                <div class="author-info table-cell">
                                                    <h6 class="author-name">Jonathan Simpson</h6>
                                                    <div class="author-company c-primary">Envato Market</div>
                                                </div>
                                            </div>

                                            <div class="quote">
                                                <i class="seoicon-quotes"></i>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <div class="testimonial-item testimonial-arrow mb30">
                                            <div class="testimonial-text">
                                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming
                                                id quod mazim.
                                            </div>

                                            <div class="author-info-wrap table">
                                                <div class="testimonial-img-author table-cell">
                                                    <img src="img/avatar3.png" alt="author">
                                                </div>
                                                <div class="author-info table-cell">
                                                    <h6 class="author-name">Angelina Johnson</h6>
                                                    <div class="author-company c-primary">Codecanyon</div>
                                                </div>
                                            </div>

                                            <div class="quote">
                                                <i class="seoicon-quotes"></i>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="case-slider-item swiper-slide">

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <div class="testimonial-item testimonial-arrow mb30">
                                            <div class="testimonial-text">
                                                Investigationes demonstraverunt lectores legere me lius quod ii legunt.
                                            </div>

                                            <div class="author-info-wrap table">
                                                <div class="testimonial-img-author table-cell">
                                                    <img src="img/avatar.png" alt="author">
                                                </div>
                                                <div class="author-info table-cell">
                                                    <h6 class="author-name">Jonathan Simpson</h6>
                                                    <div class="author-company c-primary">Envato Market</div>
                                                </div>
                                            </div>

                                            <div class="quote">
                                                <i class="seoicon-quotes"></i>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <div class="testimonial-item testimonial-arrow mb30">
                                            <div class="testimonial-text">
                                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming
                                                id quod mazim.
                                            </div>

                                            <div class="author-info-wrap table">
                                                <div class="testimonial-img-author table-cell">
                                                    <img src="img/avatar3.png" alt="author">
                                                </div>
                                                <div class="author-info table-cell">
                                                    <h6 class="author-name">Angelina Johnson</h6>
                                                    <div class="author-company c-primary">Codecanyon</div>
                                                </div>
                                            </div>

                                            <div class="quote">
                                                <i class="seoicon-quotes"></i>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="case-slider-item swiper-slide">

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <div class="testimonial-item testimonial-arrow mb30">
                                            <div class="testimonial-text">
                                                Investigationes demonstraverunt lectores legere me lius quod ii legunt.
                                            </div>

                                            <div class="author-info-wrap table">
                                                <div class="testimonial-img-author table-cell">
                                                    <img src="img/avatar.png" alt="author">
                                                </div>
                                                <div class="author-info table-cell">
                                                    <h6 class="author-name">Jonathan Simpson</h6>
                                                    <div class="author-company c-primary">Envato Market</div>
                                                </div>
                                            </div>

                                            <div class="quote">
                                                <i class="seoicon-quotes"></i>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <div class="testimonial-item testimonial-arrow mb30">
                                            <div class="testimonial-text">
                                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming
                                                id quod mazim.
                                            </div>

                                            <div class="author-info-wrap table">
                                                <div class="testimonial-img-author table-cell">
                                                    <img src="img/avatar3.png" alt="author">
                                                </div>
                                                <div class="author-info table-cell">
                                                    <h6 class="author-name">Angelina Johnson</h6>
                                                    <div class="author-company c-primary">Codecanyon</div>
                                                </div>
                                            </div>

                                            <div class="quote">
                                                <i class="seoicon-quotes"></i>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="case-slider-item swiper-slide">

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <div class="testimonial-item testimonial-arrow mb30">
                                            <div class="testimonial-text">
                                                Investigationes demonstraverunt lectores legere me lius quod ii legunt.
                                            </div>

                                            <div class="author-info-wrap table">
                                                <div class="testimonial-img-author table-cell">
                                                    <img src="img/avatar.png" alt="author">
                                                </div>
                                                <div class="author-info table-cell">
                                                    <h6 class="author-name">Jonathan Simpson</h6>
                                                    <div class="author-company c-primary">Envato Market</div>
                                                </div>
                                            </div>

                                            <div class="quote">
                                                <i class="seoicon-quotes"></i>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <div class="testimonial-item testimonial-arrow mb30">
                                            <div class="testimonial-text">
                                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming
                                                id quod mazim.
                                            </div>

                                            <div class="author-info-wrap table">
                                                <div class="testimonial-img-author table-cell">
                                                    <img src="img/avatar3.png" alt="author">
                                                </div>
                                                <div class="author-info table-cell">
                                                    <h6 class="author-name">Angelina Johnson</h6>
                                                    <div class="author-company c-primary">Codecanyon</div>
                                                </div>
                                            </div>

                                            <div class="quote">
                                                <i class="seoicon-quotes"></i>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- End Testimonials slider -->


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
