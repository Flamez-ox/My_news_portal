<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;
use App\Models\Post;
use App\Models\Settings;
use App\Models\Video;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //

    public function index()
    {
        $photo = PhotoGallery::paginate(3);
        $settings = Settings::where('id',1)->first();
        $post = Post::with('rSubCategory.rCategory')->Orderby('id','desc')->get();
        return view('frontend.pages.Gallery', compact('settings','post','photo'));
    }
    public function video()
    {
        $video = Video::paginate(4);
        $settings = Settings::where('id',1)->first();
        $post = Post::with('rSubCategory.rCategory')->Orderby('id','desc')->get();
        return view('frontend.pages.video_gallery', compact('settings','post','video'));
    }


}
