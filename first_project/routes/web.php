<?php

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
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

// Route::get('/', function (Request $request) {

//     // dd(
//     //     $request->path(),
//     //     $request->is("/"),
//     //     $request->fullUrl(),
//     //     $request->host(),
//     //     $request->httpHost(),
//     //     $request->schemeAndHttpHost(),

//     //     $request->routeIs('home'),
//     //     $request->header('X-Header-Name'),
//     //     $request->bearerToken(),
//     //     $request->ip(),
//     //     $request->prefers(['text/html', 'application/json']),
//     // );
//     // $data = [
//     //     'page_name' => 'Home Page',
//     //     'name' => 'Laravel 9 course '
//     // ];
//     // return response($data)->header('content-type', 'application/json')
//     // ->cookie('Md Emon', 'Laravel 9 course', 3600);
//     //return redirect('/contact-us');

//     //passing data from backend to frontend(array, compact)
//     return view('home', [
//         'page_name' => 'Home Page',
//         'name' => 'Laravel 9 course '
//     ]);
// })->name('home');

// Route::get('/about-us', function () {
//     return view('about', [
//         'page_name' => 'About Page'
//     ]);
// })->name('about');

// Route::get('/contact-us', function () {
//     return view('contact', [
//         'page_name' => 'Contact Page',
//         'mobile' => "+8801797734294"
//     ]);
// })->name('contact');

// Route::get('/service-us', function () {
//     $page_name = "Service Page";
//     $services = [
//         'Web Design',
//         'Web Development',
//         'SEO',
//         'Digital Marketing',
//         'Graphics Design'
//     ];
//     $product = [
//         1 => [
//             'name' => 'Bag',
//             'color' => 'Red',
//             'price' => 1200,
//         ],
//         2 => [
//             'name' => 'Shoes',
//             'color' => 'Black',
//             'price' => 200,
//         ],
//         3 => [
//             'name' => 'Mouse',
//             'color' => 'Black',
//             'price' => 2500,
//         ],
//     ];
//     $product_count = count($product);

//     $product_count = count($product);

//     //return json
//     // return response()->json([
//     //     'product' => $product,
//     //     'product count' => $product_count,

//     // ]);


//     return view('service', compact(
//         'page_name',
//         'services',
//         'product_count',
//         'product'
//     ));
// })->name('service');



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

//download file by returning response
Route::get('/resume/download', function () {
    return response()->download(
        public_path('/resume.pdf'),
        "My CV for Laravel 9.pdf"
    );
})->name('resume');



// Grouping Routes
Route::prefix('page')->name('')->group(function () {
    Route::get('/home', function (Request $request) {

        //dd($request->all());

        return view('home', [
            'page_name' => 'Home Page',
            'name' => 'Laravel 9 course '
        ]);
    })->name('home');


    //get a user input and match with user_key
    Route::get('/send-me-details', function (Request $request) {
        $user_key = 85978;
        $user_info = [
            'name' => "Emon",
            'email' => "emon123653@gmail.com",
            'mobile' => "01797734294",
            'Bank_acc' => "5237678453534",
        ];

        if ($user_key != $request->user_key) {
            return response([
                "message" => "Provide valid secret key"
            ], 404);
        } else {
            return response()->json([
                'user_info' => $user_info
            ]);
        }
    })->name('send-me-details');


    Route::get('/login', function () {
        return "Login";
    })->name('login');


    Route::get('/contact', function () {
        return view('contact', [
            'page_name' => 'Contact Page',
            'mobile' => "+8801797734294"
        ]);
    })->name('contact');

    Route::get('/service', function () {
        $page_name = "Service Page";
        $services = [
            'Web Design',
            'Web Development',
            'SEO',
            'Digital Marketing',
            'Graphics Design'
        ];
        $product = [
            1 => [
                'name' => 'Bag',
                'color' => 'Red',
                'price' => 1200,
            ],
            2 => [
                'name' => 'Shoes',
                'color' => 'Black',
                'price' => 200,
            ],
            3 => [
                'name' => 'Mouse',
                'color' => 'Black',
                'price' => 2500,
            ],
        ];
        $product_count = count($product);

        $product_count = count($product);
        return view('service', compact(
            'page_name',
            'services',
            'product_count',
            'product'
        ));
    })->name('service');

    Route::get('/about', function () {
        return view('about', [
            'page_name' => 'About Page'
        ]);
    })->name('about');
});
