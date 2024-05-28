@extends('layout.base')

@section('title')
    Create Product
@endSection


@section('content')
    <div class="container">
        <form action="{{url('products')}}" class="form" method="post">
            @csrf

           
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" value="{{old('product_name')}}" name="product_name" class="form-control" id="product_name" aria-describedby="product_name">
                <span class="text-danger">
                    @error('product_name')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" value="{{old('price')}}" name="price" class="form-control" id="price">
                <span class="text-danger">
                    @error('price')
                    {{$message}}

                    @enderror
                </span>
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endSection
