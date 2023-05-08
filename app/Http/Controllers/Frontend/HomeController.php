<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HomeAdvertisment;
use App\Models\Post;
use App\Models\Settings;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        
        $sub_category = SubCategory::with('rPost')->where('show_on_home','Show')->Orderby('sub_category_order','asc')->get();
        $home_advert = HomeAdvertisment::where('id',1)->first();

        $settings = Settings::where('id',1)->first();

       $post = Post::with('rSubCategory.rCategory')->Orderby('id','desc')->get();


        return view('frontend.pages.home', compact('home_advert','settings','post','sub_category'));
    }

    public function about()
    {
        $settings = Settings::where('id',1)->first();
        $post = Post::with('rSubCategory.rCategory')->Orderby('id','desc')->get();
        return view('frontend.pages.about', compact('settings','post'));
    }

    public function contact()
    {
        $settings = Settings::where('id',1)->first();
        $post = Post::with('rSubCategory.rCategory')->Orderby('id','desc')->get();
        return view('frontend.pages.contact', compact('settings','post'));
    }

    public function login()
    {
        $settings = Settings::where('id',1)->first();
        $post = Post::with('rSubCategory.rCategory')->Orderby('id','desc')->get();
        return view('frontend.pages.login', compact('settings','post'));
    }
}
