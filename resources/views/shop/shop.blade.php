@extends("layouts.app")

    @section('title','Shop Store')

    @section('content')
        @include('layouts.navbar')
        <div class="single-shop">
            <div class="container">
                <div class="breadcrumb">
                    <div>
                        <a href="{{ route('home') }}"> Home </a>
                    </div>
                    <span class="fa fa-angle-right"></span>
                    <div>
                        <a href="{{ route('shop.index') }}"> products </a>
                    </div>
                    <span class="fa fa-angle-right"></span>
                    <div>
                        <span> {{ $product->name }} </span>
                    </div>
                </div>
                @include('layouts.sidebar')
                <div class="product">
                    <div class="card-image">
                        <img src="/img/alienware-front.png" alt="product">
                        <img src="/img/alienware-back.png" alt="product">
                    </div>
                    <div class="details">
                        <div class="product-name">
                            {{ $product->name }}
                        </div>
                        <div class="product-details">
                            {{ $product->details }}
                        </div>
                        <div class="product-price">
                            {{ $product->presentPrice() }}
                        </div>
                        <div class="product-description">
                            {{ $product->description }}
                        </div>
                        <div class="add-to-cart">
                            <button class="btn btn-default btn-white">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection