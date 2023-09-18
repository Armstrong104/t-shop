@extends('frontend.master')

@section('content')
    <div class="container-fluid product py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p>
                <h1 class="display-6">Tea has a complex positive effect on the body</h1>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="store-item position-relative text-center">
                    <img class="img-fluid" src="{{ asset('/') }}{{$product->image}}"
                        alt="">
                    <div class="p-4">
                        <div class="text-center mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <h4 class="mb-3">{{$product->title}}</h4>
                        <p>{{$product->description}}</p>
                        <h4 class="text-primary">${{$product->price}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
