@extends('index')
@section('title', 'Pricing, Monthly and Yearly | Aeure')
@section('description', 'You can pay monthly and use as you go, or buy it once and host it yourself. Every plan starts with free 30-day trial with all the features.')
@section('content')
<div class="header-spacer"></div>
 <div class="content-wrapper">

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

<div class="container-fluid" style="background-image: url('img/background-element.png');">
    <div class="header-elements" style="min-height: 350px; padding: 140px 70px; text-align: center;">
        <h1 class="title" style="color: #fff">Pricing</h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="pricing-tables medium-padding120 bg-border-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="heading align-center">
                            <h4 class="h1 heading-title">Pricing, as simple as it gets</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                            <p class="heading-text">Our cloud plans grow together with your team. Every plan starts off with two weeks of unlimited everything. We'd like you to get a good feel of what Aeure can do - and then see what's right for you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="pricing-tables-wrap">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                            <div class="pricing-tables-item">
                                <div class="pricing-tables-icon">
                                    <img src="img/pricing1.png" alt="personal">
                                </div>
                                <a href="{{ url('plan/Minimum') }}" class="pricing-title">Minimum</a>
                                <ul class="pricing-tables-position">
                                    <li class="position-item">
                                        <span class="count">10</span>
                                        Users
                                    </li>
                                    <li class="position-item">
                                        <span class="count">5</span>
                                        Backups
                                    </li>
                                    <li class="position-item">
                                        <span class="count">10 GB</span>
                                        Disk space
                                    </li>
                                    <li class="position-item">
                                        <span class="count">1,000</span>
                                        Emails
                                    </li>
                                </ul>
                                <h4 class="rate">$299.99</h4>
                                <a href="{{ url('plan/Minimum') }}" class="btn btn-medium btn--dark">
                                    <span class="text">Order Now!</span>
                                    <span class="semicircle"></span>
                                </a>
                                <img src="img/pricing-dots.png" class="dots" alt="dots">
                            </div>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="pricing-tables-item">
                                <div class="pricing-tables-icon">
                                    <img src="img/pricing2.png" alt="personal">
                                </div>
                                <a href="{{ url('plan/Start') }}" class="pricing-title">Start</a>
                                <ul class="pricing-tables-position">
                                    <li class="position-item">
                                        <span class="count">15</span>
                                        Users
                                    </li>
                                    <li class="position-item">
                                        <span class="count">10</span>
                                        Backups
                                    </li>
                                    <li class="position-item">
                                        <span class="count">15 GB</span>
                                        Disk space
                                    </li>
                                    <li class="position-item">
                                        <span class="count">5,000</span>
                                        Emails
                                    </li>
                                </ul>
                                <h4 class="rate">$499.99</h4>
                                <a href="{{ url('plan/Start') }}" class="btn btn-medium btn--dark">
                                    <span class="text">Order Now!</span>
                                    <span class="semicircle"></span>
                                </a>

                                <img src="img/pricing-dots.png" class="dots" alt="dots">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="pricing-tables-item">
                                <div class="pricing-tables-icon">
                                    <img src="img/pricing3.png" alt="personal">
                                </div>
                                <a href="{{ url('plan/Standard') }}" class="pricing-title">Standard</a>
                                <ul class="pricing-tables-position">
                                    <li class="position-item">
                                        <span class="count">25</span>
                                        Users
                                    </li>
                                    <li class="position-item">
                                        <span class="count">15</span>
                                        Backups
                                    </li>
                                    <li class="position-item">
                                        <span class="count">25 GB</span>
                                        Disk space
                                    </li>
                                    <li class="position-item">
                                        <span class="count">10,000</span>
                                        Emails
                                    </li>
                                </ul>
                                <h4 class="rate">$899.99</h4>
                                <a href="{{ url('plan/Standard') }}" class="btn btn-medium btn--dark">
                                    <span class="text">Order Now!</span>
                                    <span class="semicircle"></span>
                                </a>

                                <img src="img/pricing-dots.png" class="dots" alt="dots">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="pricing-tables-item">
                                <div class="pricing-tables-icon">
                                    <img src="img/pricing3.png" alt="personal">
                                </div>
                                <a href="{{ url('plan/Premium') }}" class="pricing-title">Premium</a>
                                <ul class="pricing-tables-position">
                                    <li class="position-item">
                                        <span class="count">50</span>
                                        Users
                                    </li>
                                    <li class="position-item">
                                        <span class="count">25</span>
                                        Backups
                                    </li>
                                    <li class="position-item">
                                        <span class="count">50 GB</span>
                                        Disk space
                                    </li>
                                    <li class="position-item">
                                        <span class="count">15,000</span>
                                        Emails
                                    </li>
                                </ul>
                                <h4 class="rate">$1,199.99</h4>
                                <a href="{{ url('plan/Premium') }}" class="btn btn-medium btn--dark">
                                    <span class="text">Order Now!</span>
                                    <span class="semicircle"></span>
                                </a>

                                <img src="img/pricing-dots.png" class="dots" alt="dots">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="pricing-tables-item">
                                <div class="pricing-tables-icon">
                                    <img src="img/pricing3.png" alt="personal">
                                </div>
                                <a href="{{ url('plan/Elite') }}" class="pricing-title">Elite</a>
                                <ul class="pricing-tables-position">
                                    <li class="position-item">
                                        <span class="count">100</span>
                                        Users
                                    </li>
                                    <li class="position-item">
                                        <span class="count">30</span>
                                        Backups
                                    </li>
                                    <li class="position-item">
                                        <span class="count">100 GB</span>
                                        Disk space
                                    </li>
                                    <li class="position-item">
                                        <span class="count">20,000</span>
                                        Emails
                                    </li>
                                </ul>
                                <h4 class="rate">$1,499.99</h4>
                                <a href="{{ url('plan/Elite') }}" class="btn btn-medium btn--dark">
                                    <span class="text">Order Now!</span>
                                    <span class="semicircle"></span>
                                </a>

                                <img src="img/pricing-dots.png" class="dots" alt="dots">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>   
@endsection
