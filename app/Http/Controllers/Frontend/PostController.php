<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Post;
use App\Models\Settings;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function post_detail($id){

        $tags = Tag::where('post_id', $id)->get();

        $settings = Settings::where('id',1)->first();


        $post = Post::with('rSubCategory.rCategory')->Orderby('id','desc')->get();


        $post_detail = Post::with('rSubCategory.rCategory')->where('id',$id)->first();

        if ($post_detail->author_id == 0) {
            
            $user_data = Admin::where('id',$post_detail->admin_id)->first();
        }else{

            //Do this later
        }

        $total_visitors = $post_detail->visitors+1;
        $post_detail->visitors = $total_visitors;
        $post_detail->update();

        return view('frontend.pages.news',compact('post_detail','settings', 'post', 'user_data','tags'));
    }
}
