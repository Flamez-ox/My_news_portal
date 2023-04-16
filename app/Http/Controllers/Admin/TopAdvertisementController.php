<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TopAdvertisment;
use Illuminate\Http\Request;

class TopAdvertisementController extends Controller
{
    //
     public function top_ad_show()
    {
        $home_advert = TopAdvertisment::where('id',1)->first();
        return view('admin.pages.advertisement_top_view', compact('home_advert'));
    }

    public function top_advertisement_submit(Request $request)
        {

            $home_advert = TopAdvertisment::where('id',1)->first();
        //
        if($request->hasFile('top_ad')){
            $request->validate([
                'top_ad' => 'image|mimes:jpg,jpeg,png,gif',
            ]);

            unlink(public_path('frontend/images/'.$home_advert->top_ad));
            $ext = $request->file('top_ad')->extension();
            $file = 'top_ad'.'.'. $ext;
            $request->file('top_ad')->move(public_path('frontend/images/'),$file);

            $home_advert->top_ad = $file;
        }


        
        $home_advert->top_ad_url = $request->top_ad_url;
        $home_advert->top_ad_status = $request->top_ad_status;
        $home_advert->update();

        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }

}
