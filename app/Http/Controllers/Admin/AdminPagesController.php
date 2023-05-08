<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    //
    public function status_view()
    {
        $pages = Pages::where('id',1)->first();
        return view("admin.pages.pages", compact('pages'));
    }

    public function status_view_update(Request $request, $id)
    {
        $pages = Pages::where('id',1)->first();

        $pages->about_status = $request->about_status;
        $pages->login_status = $request->login_status;
        $pages->all_news_status = $request->all_news_status;
        $pages->registration_status = $request->registration_status;
        $pages->update();

        return redirect()->route('status_view')->with('success', 'Status Updated Successfully');
        
    }
}
