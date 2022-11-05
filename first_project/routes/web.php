<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //passing data from backend to frontend(array, compact)
    return view('home', [
        'page_name' => 'Home Page',
        'name' => 'Laravel 9 course '
    ]);
})->name('home');

Route::get('/about-us', function () {
    return view('about', [
        'page_name' => 'About Page'
    ]);
})->name('about');

Route::get('/contact-us', function () {
    return view('contact', [
        'page_name' => 'Contact Page',
        'mobile' => "+8801797734294"
    ]);
})->name('contact');

Route::get('/service-us', function () {
    $page_name = "Service Page";
    $product_count = 12;
    $services = [
        'Web Design',
        'Web Development',
        'SEO',
        'Digital Marketing',
        'Graphics Design'
    ];
    $product = [];
    return view('service', compact('page_name', 'services', 'product_count', 'product'));
})->name('service');



//Route with parameter and optional parameters


// Route::get('/service-us/{service_id}/{service_name?}', function ($service_id, $service_name = null) {
//     return "service" . " " . $service_id . " " . $service_name;
// })->name('service');

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     echo $name . " " . $id;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::get('/category/{category}', function ($category) {
//     echo $category;
//     //WhereIn -> search in array
// })->whereIn('category', ['electronics', 'movie', 'games', 'books', 'laptops']);


// Route::get('/search/{anything?}', function($anything = null){
//     echo "You have Search: ".$anything;
// })->where('anything', '.*');
