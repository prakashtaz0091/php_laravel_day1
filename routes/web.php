<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});

Route::get('/services/{service_name}/{opt_param?}', function ($service_name, $opt_param = null) {
    // echo 'service_detail   ' . $service_name . '   ' . $opt_param;

    $data = compact('service_name', 'opt_param'); // compact('key', 'value') it is same as array('key' => 'value'), simply converting datas into array
    // return view('service', $data);  // passing data to view
    return view('service')->with($data);  //another way of passing data to view
});

