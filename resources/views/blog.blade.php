@extends('index')
@section('title', 'Enterprise resource planning & Productivity Blog | Aeure Blog')
@section('description', 'A blog about the latest enterprise resource planning techniques and productivity tips. ')
@section('content')
<div class="header-spacer"></div>
 <div class="content-wrapper">
<!-- Stunning header -->

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Blog</h1>
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="{{ url('/') }}">Home</a>
                <i class="seoicon-right-arrow"></i>
            </li>
            <li class="breadcrumbs-item active">
                <span href="#">Blog</span>
                <i class="seoicon-right-arrow"></i>
            </li>
        </ul>
    </div>
</div>

<!-- End Stunning header -->

<!-- Overlay Search-->

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

<!-- End Overlay Search-->

<!-- Blog posts-->

<div class="container">
    <div class="row medium-padding120">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <main class="main">

                <article class="hentry post post-standard has-post-thumbnail sticky">

                    <div class="post-thumb">
                        <img src="img/post1.jpg" alt="seo">
                        <div class="overlay"></div>
                        <a href="img/post1.jpg" class="link-image js-zoom-image">
                            <i class="seoicon-zoom"></i>
                        </a>
                        <a href="#" class="link-post">
                            <i class="seoicon-link-bold"></i>
                        </a>
                    </div>

                    <div class="post__content">

                         <div class="post__author author vcard">
                             <img src="img/avatar6.png" alt="author">
                             Posted by

                             <div class="post__author-name fn">
                                <a href="#" class="post__author-link">Admin</a>
                             </div>

                         </div>

                        <div class="post__content-info">

                                <h2 class="post__title entry-title ">
                                    <a href="15_blog_details.html">The Important & Standard Post Format</a>
                                </h2>

                                <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-04-17 12:00:00">
                                            April 17, 2016
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="#">Video</a>
                                    </span>

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        6
                                    </span>

                                </div>

                                    <p class="post__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore.
                                    </p>

                                <a href="15_blog_details.html" class="btn btn-small btn--dark btn-hover-shadow">
                                    <span class="text">Continue Reading</span>
                                    <i class="seoicon-right-arrow"></i>
                                </a>
                        </div>
                    </div>

                </article>

                <article class="hentry post post-standard has-post-thumbnail video">

                    <div class="post-thumb">
                        <img src="img/post2.jpg" alt="video">
                        <div class="overlay"></div>

                        <a href="https://www.youtube.com/watch?v=bTqVqk7FSmY" class="play-video js-popup-iframe">
                            <img src="img/video-format.png" alt="play">
                        </a>
                    </div>

                    <div class="post__content">

                        <div class="post__author author vcard">
                            <img src="img/avatar7.png" alt="author">
                            Posted by

                            <div class="post__author-name fn">
                                <a href="#" class="post__author-link">Victoria Bush</a>
                            </div>

                        </div>

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="15_blog_details.html">YouTube Video Post Format</a>
                            </h2>

                            <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-04-10 12:00:00">
                                            April 10, 2016
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="#">Video</a>
                                    </span>

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        0
                                    </span>


                            </div>


                            <p class="post__text">Claritas est etiam processus dynamicus, qui sequitur mutationem
                                consuetudium lectorum quam nunc putamus parum claram.
                            </p>

                            <a href="15_blog_details.html" class="btn btn-small btn--dark btn-hover-shadow">
                                <span class="text">Continue Reading</span>
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>
                    </div>

                </article>

                <article class="hentry post post-standard has-post-thumbnail slider">


                    <div class="swiper-container post-standard-thumb-slider">

                        <div class="swiper-wrapper">

                            <div class="post-thumb swiper-slide">
                                <img src="img/post3.jpg" alt="video">
                                <div class="overlay"></div>
                            </div>

                            <div class="post-thumb swiper-slide">
                                <img src="img/post3.jpg" alt="video">
                                <div class="overlay"></div>
                            </div>

                            <div class="post-thumb swiper-slide">
                                <img src="img/post3.jpg" alt="video">
                                <div class="overlay"></div>
                            </div>

                            <div class="post-thumb swiper-slide">
                                <img src="img/post3.jpg" alt="video">
                                <div class="overlay"></div>
                            </div>
                        </div>

                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>


                    </div>
                    <div class="post__content">

                        <div class="post__author author vcard">
                            <img src="img/avatar6.png" alt="author">
                            Posted by

                            <div class="post__author-name fn">
                                <a href="#" class="post__author-link">David Brown</a>
                            </div>

                        </div>

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="15_blog_details.html">Photo with Slider Post Format</a>
                            </h2>

                            <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-04-08 12:00:00">
                                            April 8, 2016
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="#">Business,</a>
                                        <a href="#">Seo</a>
                                    </span>

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        0
                                    </span>


                            </div>


                            <p class="post__text">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                imperdiet doming id quod mazim placerat facer.
                            </p>

                            <a href="15_blog_details.html" class="btn btn-small btn--dark btn-hover-shadow">
                                <span class="text">Continue Reading</span>
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>
                    </div>

                </article>

                <article class="hentry post post-standard has-post-thumbnail quote">

                    <div class="post-thumb bg-boxed-dark">
                        <div class="testimonial-content">
                            <p class="text">Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                anteposuerit litterarum formas humanitatis per seacula quarta decima.
                            </p>
                            <div class="author-info-wrap table">
                                <div class="testimonial-img-author table-cell">
                                    <img src="img/avatar3.png" alt="author">
                                </div>
                                <div class="author-info table-cell">
                                    <h6 class="author-name">Angelina Johnson</h6>
                                    <div class="author-company">Codecanyon</div>
                                </div>
                            </div>
                            <div class="quote">
                                <i class="seoicon-quotes"></i>
                            </div>
                        </div>

                    </div>

                    <div class="post__content">

                        <div class="post__author author vcard">
                            <img src="img/avatar9.png" alt="author">
                            Posted by

                            <div class="post__author-name fn">
                                <a href="#" class="post__author-link">Jassie Bush</a>
                            </div>

                        </div>

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="15_blog_details.html">Quote Post Format</a>
                            </h2>

                            <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-04-03 12:00:00">
                                            April 3, 2016
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="#">Business,</a>
                                        <a href="#">Seo</a>
                                    </span>

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        243
                                    </span>

                            </div>

                            <a href="15_blog_details.html" class="btn btn-small btn--dark btn-hover-shadow">
                                <span class="text">Continue Reading</span>
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>
                    </div>

                </article>


                <article class="hentry post post-standard">


                    <div class="post__content">

                        <div class="post__author author vcard">
                            <img src="img/avatar6.png" alt="author">
                            Posted by

                            <div class="post__author-name fn">
                                <a href="#" class="post__author-link">Admin</a>
                            </div>

                        </div>

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="15_blog_details.html">Investigationes demonstraverunt lectores legere me lius quod</a>
                            </h2>

                            <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-04-01 12:00:00">
                                            April 1, 2016
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="#">Business,</a>
                                        <a href="#">Seo</a>
                                    </span>

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        6
                                    </span>

                            </div>

                            <p class="post__text">Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima
                                est etiam processus.
                            </p>

                            <a href="15_blog_details.html" class="btn btn-small btn--dark btn-hover-shadow">
                                <span class="text">Continue Reading</span>
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>
                    </div>

                </article>

                <article class="hentry post post-standard has-post-thumbnail audio">

                    <div class="post-thumb">
                        <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/205462171&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                    </div>

                    <div class="post__content">

                        <div class="post__author author vcard">
                            <img src="img/avatar9.png" alt="author">
                            Posted by

                            <div class="post__author-name fn">
                                <a href="#" class="post__author-link">Jassie Bush</a>
                            </div>

                        </div>

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="15_blog_details.html">Audio Post Format</a>
                            </h2>

                            <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-03-28 12:00:00">
                                            March 28, 2016
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="#">Podcasts,</a>
                                        <a href="#">Courses</a>
                                    </span>

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        7
                                    </span>

                            </div>

                            <p class="post__text">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                imperdiet doming id quod mazim placerat facer.
                            </p>

                            <a href="15_blog_details.html" class="btn btn-small btn--dark btn-hover-shadow">
                                <span class="text">Continue Reading</span>
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>
                    </div>

                </article>

                <article class="hentry post post-standard has-post-thumbnail">

                    <div class="post-thumb">
                        <img src="img/post4.jpg" alt="seo">
                        <div class="overlay"></div>
                        <a href="img/post4.jpg" class="link-image js-zoom-image">
                            <i class="seoicon-zoom"></i>
                        </a>
                        <a href="#" class="link-post">
                            <i class="seoicon-link-bold"></i>
                        </a>
                    </div>

                    <div class="post__content">

                        <div class="post__author author vcard">
                            <img src="img/avatar6.png" alt="author">
                            Posted by

                            <div class="post__author-name fn">
                                <a href="#" class="post__author-link">Admin</a>
                            </div>

                        </div>

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="15_blog_details.html">Standard Post Format</a>
                            </h2>

                            <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-03-20 12:00:00">
                                            March 20, 2016
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="#">Business,</a>
                                        <a href="#">Seo</a>
                                    </span>

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        6
                                    </span>

                            </div>

                            <p class="post__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet dolore.
                            </p>

                            <a href="15_blog_details.html" class="btn btn-small btn--dark btn-hover-shadow">
                                <span class="text">Continue Reading</span>
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>
                    </div>

                </article>

                <article class="hentry post post-standard has-post-thumbnail link">

                    <div class="post-thumb bg-boxed-primary">
                        <div class="thumb-content">
                            <a href="15_blog_details.html" class="h5 thumb-content-title">SOESIGHT - SEO, Digital Marketing, Social Media PSD Template</a>
                            <a href="#" class="site-link">www.themeforest.com</a>
                            <a href="15_blog_details.html" class="post-link">
                                <i class="seoicon-link"></i>
                            </a>
                        </div>

                        <div class="overlay"></div>

                    </div>

                    <div class="post__content">

                        <div class="post__author author vcard">
                            <img src="img/avatar7.png" alt="author">
                            Posted by

                            <div class="post__author-name fn">
                                <a href="#" class="post__author-link">Jassie Bush</a>
                            </div>

                        </div>

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="#">Link Post Format</a>
                            </h2>

                            <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-03-08 12:00:00">
                                            March 8, 2016
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="#">Links,</a>
                                        <a href="#">Partners</a>
                                    </span>

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        0
                                    </span>

                            </div>

                            <p class="post__text">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                imperdiet doming id quod mazim placerat facer.
                            </p>

                            <a href="15_blog_details.html" class="btn btn-small btn--dark btn-hover-shadow">
                                <span class="text">Continue Reading</span>
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>
                    </div>

                </article>
            </main>

            <div class="row">
                <div class="col-lg-12">
                    <nav class="navigation">

                        <a href="#" class="page-numbers current bg-border-color"><span>1</span></a>
                        <a href="#" class="page-numbers bg-border-color"><span>2</span></a>
                        <a href="#" class="page-numbers bg-border-color"><span>3</span></a>
                        <a href="#" class="page-numbers bg-border-color"><span>4</span></a>
                        <a href="#" class="page-numbers next">
                            <svg class="btn-next">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </a>

                    </nav>
                </div>
            </div>
        </div>


        <!-- Sidebar-->

        <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-12 col-xs-12">
            <aside aria-label="sidebar" class="sidebar sidebar-right">
                <div class="widget">
                    <form class="w-search">
                        <input class="email search input-standard-grey" required="required" placeholder="Search" type="search">
                        <button class="icon">
                            <i class="seoicon-loupe"></i>
                        </button>
                    </form>
                </div>

                <div class="widget w-post-category">
                    <div class="heading">
                        <h4 class="heading-title">Post Category</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>
                    <div class="post-category-wrap">
                        <div class="category-post-item">
                            <span class="post-count">168</span>
                            <a href="#" class="category-title">SEO
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>

                        <div class="category-post-item">
                            <span class="post-count">52</span>
                            <a href="#" class="category-title">Local SEO
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>

                        <div class="category-post-item">
                            <span class="post-count">40</span>
                            <a href="#" class="category-title">Social Media Marketing
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>

                        <div class="category-post-item">
                            <span class="post-count">33</span>
                            <a href="#" class="category-title">Email Marketing
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>

                        <div class="category-post-item">
                            <span class="post-count">21</span>
                            <a href="#" class="category-title">PPC Management
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>

                        <div class="category-post-item">
                            <span class="post-count">18</span>
                            <a href="#" class="category-title">Technology
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>

                        <div class="category-post-item">
                            <span class="post-count">5</span>
                            <a href="#" class="category-title">Business
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget w-about">
                    <div class="heading">
                        <h4 class="heading-title">About Us and
                            This Blog</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                            litterarum formas humanitatis per seacula quarta decima quinta.
                        </p>
                    </div>

                    <a href="02_abouts.html" class="btn btn-small btn-border c-primary">
                        <span class="text">Learn More</span>
                        <i class="seoicon-right-arrow"></i>
                    </a>
                </div>

                <div class="widget w-request bg-boxed-red">
                    <div class="w-request-content">
                        <img src="img/request.png" alt="request">
                        <h4 class="w-request-content-title">Request
                            a Free Quote</h4>
                        <p class="w-request-content-text">Gothica, quam nunc putamus parum claram, anteposuerit
                            litterarum formas humanitatis.
                        </p>

                        <a href="22_contacts.html" class="btn btn-small btn--dark btn-hover-shadow">
                            <span class="text">Contact Now</span>
                        </a>
                    </div>
                </div>

                <div class="widget w-latest-news">
                    <div class="heading">
                        <h4 class="heading-title">Latest News</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>

                    <div class="latest-news-wrap">
                        <div class="latest-news-item">
                            <div class="post-additional-info">

                                <span class="post__date">

                                    <i class="seoicon-clock"></i>

                                    <time class="published" datetime="2016-04-23 12:00:00">
                                        April 23, 2016
                                    </time>

                                </span>

                            </div>

                            <h5 class="post__title entry-title ">
                                <a href="15_blog_details.html">Eodem modo typi, qui nunc nobis videntur</a>
                            </h5>
                        </div>

                        <div class="latest-news-item">
                            <div class="post-additional-info">

                                <span class="post__date">

                                    <i class="seoicon-clock"></i>

                                    <time class="published" datetime="2016-04-08 12:00:00">
                                        April 8, 2016
                                    </time>

                                </span>

                            </div>

                            <h5 class="post__title entry-title ">
                                <a href="15_blog_details.html">Investigationes demonstraverunt lectores legere</a>
                            </h5>
                        </div>

                        <div class="latest-news-item">
                            <div class="post-additional-info">

                                <span class="post__date">

                                    <i class="seoicon-clock"></i>

                                    <time class="published" datetime="2016-03-25 12:00:00">
                                        March 25, 2016
                                    </time>

                                </span>

                            </div>

                            <h5 class="post__title entry-title ">
                                <a href="15_blog_details.html">Qemonstraverunt legere</a>
                            </h5>
                        </div>

                        <div class="latest-news-item">
                            <div class="post-additional-info">

                                <span class="post__date">

                                    <i class="seoicon-clock"></i>

                                    <time class="published" datetime="2016-03-12 12:00:00">
                                        March 12, 2016
                                    </time>

                                </span>

                            </div>

                            <h5 class="post__title entry-title ">
                                <a href="15_blog_details.html">Ut wisi enim ad minim veniam, quis nostrud exerci</a>
                            </h5>
                        </div>

                    </div>

                    <a href="14_blog.html" class="btn btn-small btn--dark btn-hover-shadow">
                        <span class="text">All News</span>
                        <i class="seoicon-right-arrow"></i>
                    </a>
                </div>

                <div class="widget w-follow">
                    <div class="heading">
                        <h4 class="heading-title">Follow Us</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>

                    <div class="w-follow-wrap">
                        <div class="w-follow-item facebook-bg-color">
                            <a href="#" class="w-follow-social__item table-cell">
                                <i class="seoicon-social-facebook"></i>
                            </a>
                            <a href="#" class="w-follow-title table-cell">Facebook
                                <span class="w-follow-add">
                                    <i class="seoicon-cross plus"></i>
                                    <i class="seoicon-check-bold check"></i>
                                </span>
                            </a>
                        </div>
                        <div class="w-follow-item twitter-bg-color">
                            <a href="#" class="w-follow-social__item table-cell">
                                <i class=" seoicon-social-twitter"></i>
                            </a>
                            <a href="#" class="w-follow-title table-cell">Twitter
                                <span class="w-follow-add active">
                                    <i class="seoicon-cross plus"></i>
                                    <i class="seoicon-check-bold check"></i>
                                </span>
                            </a>
                        </div>
                        <div class="w-follow-item linkedin-bg-color">
                            <a href="#" class="w-follow-social__item table-cell">
                                <i class="seoicon-social-linkedin"></i>
                            </a>
                            <a href="#" class="w-follow-title table-cell">Linkedin
                                <span class="w-follow-add">
                                    <i class="seoicon-cross plus"></i>
                                    <i class="seoicon-check-bold check"></i>
                                </span>
                            </a>
                        </div>
                        <div class="w-follow-item google-bg-color">
                            <a href="#" class="w-follow-social__item table-cell">
                                <i class="seoicon-social-google-plus"></i>
                            </a>
                            <a href="#" class="w-follow-title table-cell">Google+
                                <span class="w-follow-add">
                                    <i class="seoicon-cross plus"></i>
                                    <i class="seoicon-check-bold check"></i>
                                </span>
                            </a>
                        </div>
                        <div class="w-follow-item pinterest-bg-color">
                            <a href="#" class="w-follow-social__item table-cell">
                                <i class="seoicon-social-pinterest"></i>
                            </a>
                            <a href="#" class="w-follow-title table-cell">Pinterest
                                <span class="w-follow-add">
                                    <i class="seoicon-cross plus"></i>
                                    <i class="seoicon-check-bold check"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                </div>

                <div  class="widget w-tags">
                    <div class="heading">
                        <h4 class="heading-title">Popular Tags</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>

                    <div class="tags-wrap">
                        <a href="#" class="w-tags-item">SEO</a>
                        <a href="#" class="w-tags-item">Advertising</a>
                        <a href="#" class="w-tags-item">Business</a>
                        <a href="#" class="w-tags-item">Optimization</a>
                        <a href="#" class="w-tags-item">Digital Marketing</a>
                        <a href="#" class="w-tags-item">Social</a>
                        <a href="#" class="w-tags-item">Keyword</a>
                        <a href="#" class="w-tags-item">Strategy</a>
                        <a href="#" class="w-tags-item">Audience</a>
                    </div>
                </div>
            </aside>
        </div>

        <!-- End Sidebar-->


    </div>
</div>

<!-- End Blog posts-->

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
                        <div class="sub-title">Sign up for new Seosignt content, updates, surveys & offers.</div>

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
