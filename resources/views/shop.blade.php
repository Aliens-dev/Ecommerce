@extends("layouts.app")

    @section('title','Shop Store')

    @section('content')
        @include('layouts.navbar')
        <div class="shop">
            <div class="container">
                @include('layouts.sidebar')
                <div class="featured-products">
                    <div class="products">
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
    @endsection