<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function setting_show()
    {
        $settings = Settings::where('id',1)->first();
        return view('admin.pages.settings',compact('settings'));
    }


    public function setting_update(Request $request)
    {
        
        $request->validate([
            'news_ticker_total' => 'required',
        ]);

        $settings = Settings::where('id',1)->first();

        $settings->news_ticker_total = $request->news_ticker_total;
        $settings->news_ticker_status = $request->news_ticker_status;

        $settings->update();

        


        return redirect()->back()->with('success', 'Ticker Updated Successfully');
        
    }
}
