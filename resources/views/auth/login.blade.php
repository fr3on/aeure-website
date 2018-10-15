@extends('.index')
@section('title', 'App Launcher | Aeure')
@section('description', 'You can pay monthly and use as you go, or buy it once and host it yourself. Every plan starts with free 30-day trial with all the features.')
@section('content')
<div class="header-spacer"></div>
<div class="content-wrapper">
    <!-- Stunning header -->


    <div class="stunning-header stunning-header-bg-gray">
        <div class="stunning-header-content">
            <h1 class="stunning-header-title">Sign in Aeure</h1>
            <ul class="breadcrumbs">
                <li class="breadcrumbs-item">
                    <a href="{{ url('/') }}">Home</a>
                    <i class="seoicon-right-arrow"></i>
                </li>
                <li class="breadcrumbs-item active">
                    <span href="#">Sign in Aeure</span>
                    <i class="seoicon-right-arrow"></i>
                </li>
            </ul>
        </div>
    </div>

    <!-- End Stunning header -->

    <!-- Overlay search -->

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

    <!-- End Overlay search -->

    <!-- Shop user form -->

    <div class="container-fluid">
        <div class="shop-user-form pt120">

            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="#" class="item-title active">Sign in</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="#" class="item-title">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row bg-border-color medium-padding80">
                <div class="container">
                    <div class="contact-form">
                        <form class="shop-user-form-return" method="POST" action="{{ route('login') }}" id="signin">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    @if ($errors->has('email'))
                                        <p>{{ $errors->first('email') }}</p>
                                    @endif
                                    @if ($errors->has('password'))
                                        <p>{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-5">
                                    <input class="email input-standard-grey" placeholder="Username or Email" type="email" name="email" required>

                                </div>

                                <div class="col-lg-5">
                                    <input class="email input-standard-grey" placeholder="Password" type="password" name="password" required>

                                </div>

                                <div class="col-lg-2">
                                    <a href="{{ route('password.request') }}" class="helped">Lost your password?</a>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="login-btn-wrap">

                                        <button class="btn btn-medium btn--dark btn-hover-shadow" type="submit" onclick="document.forms['signin'].submit(); return false;">
                                            <span class="text">login now</span>
                                            <span class="semicircle"></span>
                                        </button>

                                        <div class="remember-wrap">

                                            <div class="checkbox">
                                                <input id="remember-1" name="remember" value="remember" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="remember-1">Remember Me</label>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Shop user form -->
</div>
@endsection
