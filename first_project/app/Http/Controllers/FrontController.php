<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        //$users = User::all();
        //$users = User::latest()->get();
        $users = User::where('created_at','<=',now())->get();
        return view('home', [
            'page_name' => 'Home Page',
            'name' => 'Laravel 9 course ',
            'users' =>$users
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


}
