@extends('backend.master')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Edit Product</h1>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-8 offset-2">
                @if (Session::get('notification'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ Session::get('notification') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title *</label>
                        <input type="text" class="form-control" name="title" value="{{ $product->title }}">
                    </div>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                    </div>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Price *</label>
                        <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                    </div>
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div>
                        <img src="{{asset('/')}}{{$product->image}}" alt="" height="50" width="70">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image</label>
                        <input type="file" accept="image/*" class="form-control" name="image" value="{{ $product->image }}">
                    </div>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <button type="submit" class="btn btn-success">Update Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
