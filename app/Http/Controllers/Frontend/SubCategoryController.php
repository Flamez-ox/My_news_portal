<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Settings;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //
    public function all_post()
    {
        $settings = Settings::where('id',1)->first();

       $post = Post::with('rSubCategory.rCategory')->Orderby('id','desc')->get();

        return view('frontend.pages.all_news',compact('settings','post'));
    }

    public function sub_category_news($id)
    {
        $sub_category = SubCategory::with('rCategory')->where('id',$id)->first();
        $settings = Settings::where('id',1)->first();

       $post = Post::with('rSubCategory.rCategory')->Orderby('id','desc')->get();
       $post_data = Post::where('sub_category_id',$id)->Orderby('sub_category_id','desc')->paginate(1);

        return view('frontend.pages.sub_category_news',compact('settings','post','sub_category','post_data'));
    }
}
