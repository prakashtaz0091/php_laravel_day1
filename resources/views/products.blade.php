@extends('layout.base')

@section('title')
    Products
@endSection

@section('content')
    <div class="container d-flex flex-wrap justify-content-evenly">
        @foreach ($products as $product)
            <x-card :product="$product" />
        @endforeach
    </div>
@endSection
