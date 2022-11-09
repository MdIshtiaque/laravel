<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home', [
            'page_name' => 'Home Page',
            'name' => 'Laravel 9 course '
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'page_name' => 'Contact Page',
            'mobile' => "+8801797734294"
        ]);
    }
    public function service()
    {

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
    }
    public function about()
    {
        return view('about', [
            'page_name' => 'About Page'
        ]);
    }

    public function SendMeDetails(Request $request)
    {
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
    }
}


