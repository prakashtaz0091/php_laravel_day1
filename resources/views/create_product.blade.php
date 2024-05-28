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
                <input type="text" name="product_name" class="form-control" id="product_name" aria-describedby="product_name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" class="form-control" id="price">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endSection
