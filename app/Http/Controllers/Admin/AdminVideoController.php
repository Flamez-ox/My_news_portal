<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class AdminVideoController extends Controller
{
    //
    public function video_show()
    {
        $video = Video::get();
       return  view('admin.pages.video',compact('video'));
    }

    public function video_create()
    {
       return  view('admin.pages.video_create');
    }

    public function video_submit(Request $request)
    {
        //
        $video = new Video();

        $url = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';

        $request->validate([
            'video_url' => 'required|url:'.$url,
            'caption' => 'required'
        ], [], [
            'caption' => 'Caption'
        ]);

            $video->video_url = $request->video_url;
            $video->caption = $request->caption;
            $video->save();

            return redirect()->route('admin_video')->with('success', 'Video created Successfully');
    }

    public function video_edit($id)
    {
        $video = Video::where('id',$id)->first();
        return view('admin.pages.video_edit', compact('video'));
    }

    public function video_update(Request $request, $id)
    {
        //
        $url = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';

        $video = Video::where('id',$id)->first();

        $request->validate([
            'caption' => 'required'
        ], [], [
            'caption' => 'Caption'
        ]);

        if($request->video_url){
            $request->validate([
                'video_url' => 'required|url:'.$url,
            ]);

            $video->video_url = $request->video_url;

        }


        
        $video->caption = $request->caption;
        $video->update();


        return redirect()->route('admin_video')->with('success', 'Video Updated Successfully');
    
}

public function video_delete($id)
{
    //
    $video = Video::where('id',$id)->first();
    

    $video->delete();

    return redirect()->route('admin_video')->with('success', 'Video Deleted Successfully');

}


}
