<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeAdvertisment;
use Illuminate\Http\Request;

class HomeAdertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home_ad_show()
    {
        //
        $home_advert = HomeAdvertisment::where('id',1)->first();
        return view('admin.pages.advertisement_home_view', compact('home_advert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function home_advertisement_submit(Request $request)
        {

        $home_advert = HomeAdvertisment::where('id',1)->first();
        //
        if($request->hasFile('above_search_ad')){
            $request->validate([
                'above_search_ad' => 'image|mimes:jpg,jpeg,png,gif',
            ]);

            unlink(public_path('frontend/images/'.$home_advert->above_search_ad));
            $ext = $request->file('above_search_ad')->extension();
            $file = 'above_search_ad'.'.'. $ext;
            $request->file('above_search_ad')->move(public_path('frontend/images/'),$file);

            $home_advert->above_search_ad = $file;
        }

        if($request->hasFile('above_footer_ad')){
            $request->validate([
                'above_footer_ad' => 'image|mimes:jpg,jpeg,png,gif',
            ]);

            unlink(public_path('frontend/images/'.$home_advert->above_footer_ad));
            $ext = $request->file('above_footer_ad')->extension();
            $file = 'above_footer_ad'.'.'. $ext;
            $request->file('above_footer_ad')->move(public_path('frontend/images/'),$file);

            $home_advert->above_footer_ad = $file;
        }


        
        $home_advert->above_search_ad_url = $request->above_search_ad_url;
        $home_advert->above_search_ad_status = $request->above_search_ad_status;
        $home_advert->above_footer_ad_url = $request->above_footer_ad_url;
        $home_advert->above_footer_ad_status = $request->above_search_ad_status;
        $home_advert->update();

        return redirect()->back()->with('success', 'Profile Updated Successfully');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
