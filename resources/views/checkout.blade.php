@extends('index')
@section('title', 'Checkout | Aeure')
@section('description', 'You can pay monthly and use as you go, or buy it once and host it yourself. Every plan starts with free 30-day trial with all the features.')
@section('content')
<div class="header-spacer"></div>
<div class="content-wrapper">

    <!-- Stunning header -->
    <div class="stunning-header stunning-header-bg-gray">
        <div class="stunning-header-content">
            <h1 class="stunning-header-title">Checkout</h1>
            <ul class="breadcrumbs">
                <li class="breadcrumbs-item">
                    <a href="{{ url('/') }}">Home</a>
                    <i class="seoicon-right-arrow"></i>
                </li>
                <li class="breadcrumbs-item active">
                    <span href="#">Checkout</span>
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
    <!-- Order -->


    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="order">
                            <h2 class="h1 order-title">Your Order</h2>
                            <form action="#" method="post" class="cart-main">
                                <table class="shop_table cart">
                                    <thead class="cart-product-wrap-title-main">
                                    <tr>
                                        <th class="product-thumbnail">Subscription</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach(Cart::getContent() as $value)
                                    <tr class="cart_item">

                                        <td class="product-thumbnail">

                                            <div class="cart-product__item">
                                                <div class="cart-product-content">
                                                    <h5 class="cart-product-title">{{ $value->name }}</h5>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="product-quantity">

                                            <div class="quantity">
                                                x {{ $value->quantity }}
                                            </div>

                                        </td>

                                        <td class="product-subtotal">
                                            <h5 class="total amount">${{ $value->price }}</h5>
                                            <h5 class="total amount"> + VAT 14% </h5>
                                        </td>

                                    </tr>
                                    @endforeach
                                    <tr class="cart_item subtotal">

                                        <td class="product-thumbnail">


                                            <div class="cart-product-content">
                                                <h5 class="cart-product-title">	Subtotal:</h5>
                                            </div>


                                        </td>

                                        <td class="product-quantity">

                                        </td>

                                        <td class="product-subtotal">
                                            <h5 class="total amount">${{ \Cart::getTotal() }}</h5>
                                        </td>
                                    </tr>

                                    <tr class="cart_item total">

                                        <td class="product-thumbnail">


                                            <div class="cart-product-content">
                                                <h5 class="cart-product-title">Total:</h5>
                                            </div>


                                        </td>

                                        <td class="product-quantity">

                                        </td>

                                        <td class="product-subtotal">
                                            <h5 class="total amount">${{ \Cart::getTotal() }}</h5>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                                <div class="cheque">

                                    <div class="cheque-content">
                                        <h5 class="cheque-content-title">Cheque Payment</h5>
                                        <p class="cheque-content-subtitle">Please send your cheque to Store Name, Store Street,
                                            Store Town, Store State / County, Store Postcode.
                                        </p>
                                    </div>

                                    <div class="logos">
                                        <a href="#" class="logos-item pay-pal">
                                            <img src="img/pay-pal.png" alt="PayPal">
                                        </a>
                                        <a href="#" class="logos-item">
                                            <img src="img/visa.png" alt="Visa">
                                        </a>
                                        <a href="#" class="logos-item">
                                            <img src="img/mastercard.png" alt="MasterCard">
                                        </a>
                                        <a href="#" class="logos-item">
                                            <img src="img/discover.png" alt="DISCOVER">
                                        </a>
                                        <a href="#" class="logos-item">
                                            <img src="img/amex.png" alt="Amex">
                                        </a>

                                        <div class="btn btn-medium btn--light-green btn-hover-shadow">
                                            <span class="text">Place Order</span>
                                            <span class="semicircle"></span>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- End Order -->

</div>
@endsection
