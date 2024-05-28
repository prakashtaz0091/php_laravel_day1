<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
// Route::get('/', function () {
//     return view('home');
// })->name('home');
// Route::get('/about', function () {
//     return view('about');
// })->name('about');
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/services', function () {
//     return view('services');
// });

// Route::get('/services/{service_name}/{opt_param?}', function ($service_name, $opt_param = null) {
//     // echo 'service_detail   ' . $service_name . '   ' . $opt_param;

//     $unsafe_data = "<script>alert('Unsafe data');</script>";

//     $data = compact('service_name', 'opt_param', 'unsafe_data'); // compact('key', 'value') it is same as array('key' => 'value'), simply converting datas into array
//     // return view('service', $data);  // passing data to view
    
    
    
//     return view('service')->with($data);  //another way of passing data to view




// })->name('service_detail');



Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/', [HomeController::class, 'index'])->name('about');

Route::resource('products', ProductController::class);
