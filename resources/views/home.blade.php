@extends("layouts.app")

    @section('title','AliensDev Ecommerce')

    @section('content')

        @include('layouts.header')

        <div class="featured-products">
            <div class="container">
                <div class="products-header">
                    <div class="title">
                        <span>FEATURED PRODUCTS</span>
                    </div>
                    <div class="divider-x">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="products-paragraph">
                        AliensDev is a powerful eCommerce Plateform.
                        Visit our shop page to see all main features for Your Store
                    </div>
                </div>
                <div class="products">
                    <div class="container">
                        <div class="product-items">
                            @foreach($products as $product)
                                <a href="#" class="card">
                                    <div class="card-image">
                                        <img src="/img/alienware-front.png" alt="product">
                                        <img src="/img/alienware-back.png" alt="product">
                                    </div>
                                    <div class="card-controls">
                                        <div class="card-name">
                                            {{ $product->name }}
                                        </div>
                                        <div class="card-price">
                                            {{ $product->presentPrice() }}
                                        </div>
                                        <div class="add-to-card">
                                            <i class="fa fa-shopping-cart"></i> Add to card
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="newsletter-section">
            <div class="overlay"></div>
            <div class="container">
                <div class="newsletter">
                    <div class="newsletter-header">
                        <div class="connect-us">
                            Connect to AliensDev.
                        </div>
                        <div class="join-us">
                            Join Our Newsletter
                        </div>
                        <p>
                            Hey you, sign up it only takes a second to be the first to find out about our latest news and promotions…
                        </p>
                    </div>
                    <div class="newsletter-form">
                        <div class="form">
                            <i class="fa fa-envelope"></i>
                            <input placeholder="your Email address" />
                            <button class="btn btn-default btn-white sign-up">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')

    @endsection