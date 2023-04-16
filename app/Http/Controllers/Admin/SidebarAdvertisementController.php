<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SidebarAdvertisement;
use Illuminate\Http\Request;

class SidebarAdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sidebar_ad_show()
    {
        //
        $sidebar_ad = SidebarAdvertisement::get();
        return view('admin.pages.advertisement_sidebar', compact('sidebar_ad'));
    }
    public function sidebar_ad_edit($id)
    {
        $sidebar_ad = SidebarAdvertisement::where('id',$id)->first();
        return view('admin.pages.advertisement_sidebar_edit', compact('sidebar_ad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sidebar_ad_create()
    {
        //
        return view('admin.pages.advertisement_sidebar_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sidebar_advertisement_submit(Request $request)
    {
        //
        $sidebar_ad = new SidebarAdvertisement();


        $request->validate([
            'sidebar_ad' => 'required|image|mimes:jpg,jpeg,png,gif',
        ], [], [
            'sidebar_ad' => 'Advertisement'
        ]);

        $now = time();

        $ext = $request->file('sidebar_ad')->extension();
            $file = 'sidebar_ad'.$now.'.'. $ext;
            $request->file('sidebar_ad')->move(public_path('frontend/images/'),$file);

            $sidebar_ad->sidebar_ad= $file;
            $sidebar_ad->sidebar_ad_url = $request->sidebar_ad_url;
            $sidebar_ad->sidebar_ad_location = $request->sidebar_ad_location;
            $sidebar_ad->save();

            return redirect()->back()->with('success', 'Advertisement created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sidebar_advertisement_update(Request $request, $id)
    {
        //
        $now = time();
        $sidebar_ad = SidebarAdvertisement::where('id',$id)->first();

        if($request->hasFile('sidebar_ad')){
            $request->validate([
                'sidebar_ad' => 'image|mimes:jpg,jpeg,png,gif',
            ]);

            unlink(public_path('frontend/images/'.$sidebar_ad->sidebar_ad));
            $ext = $request->file('sidebar_ad')->extension();
            $file = 'sidebar_ad'.$now.'.'. $ext;
            $request->file('sidebar_ad')->move(public_path('frontend/images/'),$file);

            $sidebar_ad->sidebar_ad = $file;
        }


            $sidebar_ad->sidebar_ad_url = $request->sidebar_ad_url;
            $sidebar_ad->sidebar_ad_location = $request->sidebar_ad_location;
            $sidebar_ad->update();


            return redirect()->route('admin_sidebar_advertisement')->with('success', 'Advertisement updated Successfully');

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sidebar_ad_delete($id)
    {
        //
        $sidebar_ad = SidebarAdvertisement::where('id',$id)->first();
        
        unlink(public_path('frontend/images/'.$sidebar_ad->sidebar_ad));

        $sidebar_ad->delete();

        return redirect()->route('admin_sidebar_advertisement')->with('success', 'Advertisement Deleted Successfully');

    }
}
