<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Auth;
use DB;

class AdminPostController extends Controller
{
    //
    public function post_show()
    {
        # code...
        $posts = Post::with('rSubCategory.rCategory')->get();
       return  view('admin.pages.posts',compact('posts'));
    }

    public function post_create()
    {
        # code...
        $sub_categories =  SubCategory::with('rCategory')->get();

        return  view('admin.pages.post_create',compact('sub_categories'));
       
    }

    public function post_submit(Request $request)
    {
        //
        
        $now = time();
        $post = new Post();

        $q = DB::select("SHOW TABLE STATUS LIKE 'posts'");
        $ia_id = $q[0]->Auto_increment;


        $request->validate([
            'post_tittle' => 'required',
            'post_detail' => 'required'
        
        ]);

        if ($request->hasFile('post_photo')) {
            # code...
            $request->validate([
                'post_photo' => 'image|mimes:jpg,jpeg,png,gif',
            
            ]);
            $ext = $request->file('post_photo')->extension();
            $file = 'post_photo'.$now.'.'. $ext;
            $request->file('post_photo')->move(public_path('frontend/images/'),$file);

            $post->post_photo = $file;
        }
    

            $post->post_tittle= $request->post_tittle;
            $post->post_detail = $request->post_detail;
            $post->sub_category_id = $request->sub_category_id;
            $post->visitors = 1;
            $post->author_id = 0;
            $post->is_share = $request->is_share;
            $post->is_comment = $request->is_comment;
            $post->admin_id = Auth::guard('admin')->user()->id;


            if(!empty($request->tags)){

            
            $tag_array_new = [];

            $tag_array = explode(',',$request->tags);
    
            for($i=0; $i<count($tag_array); $i++) {
    
                $tag_array_new[] = trim($tag_array[$i]);
            }
               
            $tag_array_new = array_values(array_unique($tag_array_new));

            for ($i=0; $i < count($tag_array_new); $i++) { 
                
               
               

                $tags = new Tag();
                $tags->post_id =  $ia_id;
                $tags->tag_name = trim($tag_array_new[$i]);
                $tags->save();
                
                
               
            }
        }
            
            $post->save();

            return redirect()->route('admin_post_show')->with('success', 'Posts created Successfully');
    }

    public function post_edit($id)
    {
        $exisitng_tags = Tag::where('post_id',$id)->get();
        $post = Post::where('id',$id)->first();
        $sub_categories =  SubCategory::with('rCategory')->get();
        return view('admin.pages.post_edit', compact('post','sub_categories','exisitng_tags'));
    }

    public function post_update(Request $request, $id)
    {
        //
        $now = time();
        $post = Post::where('id',$id)->first();

        $request->validate([
            'post_tittle' => 'required',
            'post_detail' => 'required'
        
        ]);

        if($request->hasFile('post_photo')){
            $request->validate([
                'post_photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);
            if(!empty($post->post_photo)){
                unlink(public_path('frontend/images/'.$post->post_photo));
                $ext = $request->file('post_photo')->extension();
                $file = 'post_photo'.$now.'.'. $ext;
                $request->file('post_photo')->move(public_path('frontend/images/'),$file);

            }else{
                $ext = $request->file('post_photo')->extension();
            $file = 'post_photo'.$now.'.'. $ext;
            $request->file('post_photo')->move(public_path('frontend/images/'),$file);
            }
            

            $post->post_photo = $file;
        }


        $post->post_tittle= $request->post_tittle;
            $post->post_detail = $request->post_detail;
            $post->sub_category_id = $request->sub_category_id;
            $post->visitors = 1;
            $post->author_id = 0;
            $post->is_share = $request->is_share;
            $post->is_comment = $request->is_comment;
            $post->admin_id = Auth::guard('admin')->user()->id;

            $tag_array = explode(',',$request->tags);
            for ($i=0; $i < count($tag_array); $i++) { 

                $total = Tag::where('post_id',$id)->where('tag_name',trim($tag_array[$i]))->count();

                if(!$total && !empty($request->tags)){
                $tags = new Tag();
                $tags->post_id =  $id;
                $tags->tag_name = trim($tag_array[$i]);
                $tags->save();
                }
                
                
            }
            
            $post->update();


            return redirect()->back()->with('success', 'Post updated Successfully');

       
    }

    public function post_delete_tag($id,$id1)
    {
        $exisitng_tags = Tag::where('id',$id)->get()->first();
        
        $exisitng_tags->delete();

        return redirect()->route('post_edit',$id1)->with('success', 'Tag deleted Successfully');
    }


    public function post_delete($id)
    {
        $exisitng_post = Post::where('id',$id)->get()->first();

        if($exisitng_post->post_photo){
            unlink(public_path('frontend/images/'.$exisitng_post->post_photo));

        }

            Tag::where('post_id',$id)->delete();
        
        $exisitng_post->delete();

        return redirect()->route('admin_post_show')->with('success', 'Post deleted Successfully');
    }
}
