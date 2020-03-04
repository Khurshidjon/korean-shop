<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function blog()
    {
        return view('frontend.blog');
    }
    public function singleBlog()
    {
        return view('frontend.blog-single');
    }
    public function cart()
    {
        return view('frontend.cart');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function wishlist()
    {
        return view('frontend.wishlist');
    }

    public function shop()
    {
        return view('frontend.shop');
    }

    public function singleProduct()
    {
        return view('frontend.product-single');
    }
}
