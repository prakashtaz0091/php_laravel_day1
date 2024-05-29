@extends('layout.base')

@section('title')
    {{ $product->name }}
@endsection

@section('content')
    <x-card :product="$product" />
@endsection
