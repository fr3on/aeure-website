@extends('index')
@section('title', 'Manufacturing Domain | Aeure')
@section('description', 'Aeure Manufacturing module helps you manage your manufacturing process right from procurement to shipping finished goods.')
@section('content')
    <div class="header-spacer"></div>
    <div class="content-wrapper">

        <!-- Stunning Header -->

        <div class="stunning-header stunning-header-bg-red">
            <div class="stunning-header-content">
                <h1 class="stunning-header-title">Manufacturing Domain</h1>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs-item">
                        <a href="{{ url('/') }}">Home</a>
                        <i class="seoicon-right-arrow"></i>
                        <a href="{{ url('industries') }}">Industries</a>
                        <i class="seoicon-right-arrow"></i>
                    </li>
                    <li class="breadcrumbs-item active">
                        <span href="#">Manufacturing</span>
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
                                <h4 class="h1 heading-title">Manufacturing</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>

                                <h5 class="heading-subtitle">Aeure Manufacturing module helps you manage your manufacturing process right from procurement to shipping finished goods.
                                </h5>

                            </div>

                            <ul class="list list--secondary mb60">
                                <li>
                                    <i class="seoicon-check"></i>
                                    <a href="#">Bill of Materials
                                    </a>
                                </li>

                                <li>
                                    <i class="seoicon-check"></i>
                                    <a href="#">Production Plan
                                    </a>
                                </li>

                                <li>
                                    <i class="seoicon-check"></i>
                                    <a href="#">Work Order
                                    </a>
                                </li>

                                <li>
                                    <i class="seoicon-check"></i>
                                    <a href="#">Items and Variants
                                    </a>
                                </li>
                            </ul>

                            <a href="{{ url('demo')  }}" class="btn btn-medium btn--dark btn-hover-shadow mb30">
                                <span class="text">Demo</span>
                                <span class="semicircle"></span>
                            </a>
                        </div>

                        <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                            <img src="svg/manufacturing.svg" alt="social">
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
                            <h4 class="pie-chart-content-title">Bill of Materials</h4>
                            <p class="pie-chart-content-text">Manage multi-level Bill of Materials and Operations, the blue print of your manufacturing system.
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
                            <h4 class="pie-chart-content-title">Production Plan</h4>
                            <p class="pie-chart-content-text">Make Production Plans based on Sales Orders or internal requirements and track operations.

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
                            <h4 class="pie-chart-content-title">Work Order</h4>
                            <p class="pie-chart-content-text">Issue and track Work Orders for workstations and plan time and material for each Work Order.
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
                            <h4 class="pie-chart-content-title">Items and Variants</h4>
                            <p class="pie-chart-content-text">Item management helps you create and manage your manufacturing items and its variants.

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
                            <h4 class="pie-chart-content-title">Batches and Serial Numbers</h4>
                            <p class="pie-chart-content-text">Aeure has built-in support for batched and serialized inventory that will help you in traceability.
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
                            <h4 class="pie-chart-content-title">Quality Inspection</h4>
                            <p class="pie-chart-content-text">Keep track of quality inspections done for purchased and manufacturing materials.

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
