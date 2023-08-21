<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $brands = Brand::all();
        return view('site.pages.home', compact('products', 'brands'));
    }

    public function contact()
    {
        return view('site.pages.contact_us');
    }

    public function about()
    {
        return view('site.pages.about_us');
    }

    public function menu()
    {
        return view('site.pages.our_menu');
    }
}
