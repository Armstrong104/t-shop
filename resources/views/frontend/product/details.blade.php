@extends('frontend.master')

@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Online Store</p>
                <h1 class="display-6">Want to stay healthy? Choose tea taste</h1>
            </div>
            <div class="row g-4">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="{{ asset('/') }}{{ $product->image }}" alt="">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">{{ $product->title }}</h4>
                            <p>{{ $product->description }}</p>
                            <h4 class="text-primary">{{ $product->price }}</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="{{ route('products.show', $product->id) }}"
                                class="btn btn-primary rounded-pill py-2 px-4 m-2">More Details <i
                                    class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i
                                    class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
