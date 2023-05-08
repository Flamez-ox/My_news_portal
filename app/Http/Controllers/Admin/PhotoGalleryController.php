<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function photo_show()
    {
        $photo = PhotoGallery::get();
       return  view('admin.pages.photo',compact('photo'));
    }

    public function photo_create()
    {
       return  view('admin.pages.photo_create');
    }


    public function photo_submit(Request $request)
    {
        //
        $photo = new PhotoGallery();


        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif',
            'caption' => 'required'
        ], [], [
            'caption' => 'Caption'
        ]);

        $now = time();

        $ext = $request->file('photo')->extension();
            $file = 'photo'.$now.'.'. $ext;
            $request->file('photo')->move(public_path('frontend/images/'),$file);

            $photo->photo = $file;
            $photo->caption = $request->caption;
            $photo->save();

            return redirect()->route('admin_photo')->with('success', 'Gallery created Successfully');
    }

    public function photo_edit($id)
    {
        $photo = PhotoGallery::where('id',$id)->first();
        return view('admin.pages.photo_edit', compact('photo'));
    }
    
    public function photo_update(Request $request, $id)
    {
        //
        $now = time();
        $photo = PhotoGallery::where('id',$id)->first();

        $request->validate([
            'caption' => 'required'
        ], [], [
            'caption' => 'Caption'
        ]);

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);

            unlink(public_path('frontend/images/'.$photo->photo));
            $ext = $request->file('photo')->extension();
            $file = 'photo'.$now.'.'. $ext;
            $request->file('photo')->move(public_path('frontend/images/'),$file);

            $photo->photo = $file;
        }


            $photo->caption = $request->caption;
            $photo->update();


         return redirect()->route('admin_photo')->with('success', 'Gallery Updated Successfully');
    
}

public function photo_delete($id)
{
    //
    $photo = PhotoGallery::where('id',$id)->first();
    
    unlink(public_path('frontend/images/'.$photo->photo));

    $photo->delete();

    return redirect()->route('admin_photo')->with('success', 'Gallery Deleted Successfully');

}

}