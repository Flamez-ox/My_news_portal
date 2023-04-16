<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    //
    public function sub_catergory_show()
    {
        # code...
        $sub_category = SubCategory::with('rCategory')->orderBy('sub_category_order','asc')->get();
       return  view('admin.pages.sub_catergory',compact('sub_category'));
    }

    public function sub_category_create()
    {
        # code...
        $categories = Category::orderBy('category_order','asc')->get(); 
       return  view('admin.pages.sub_category_create', compact('categories'));
    }
    


    public function sub_category_submit(Request $request)
    {
        # code...
        
        $request->validate([
            'sub_category_name' => 'required',
            'sub_category_order' => 'required',
        ]);

        $sub_category = new SubCategory();
        $sub_category->sub_category_name = $request->sub_category_name;
        $sub_category->show_on_menu = $request->show_on_menu;
        $sub_category->show_on_home = $request->show_on_home;
        $sub_category->sub_category_order = $request->sub_category_order;
        $sub_category->category_id = $request->category_id;
        $sub_category->save();

        return redirect()->route('admin_sub_catergory_show')->with('success', 'Sub-Category Created Successfully');
    }

    public function sub_category_edit($id)
    {
        # code...
        $sub_category = SubCategory::where('id',$id)->first();
        $categories = Category::orderBy('category_order','asc')->get(); 
        return view('admin.pages.sub_category_edit', compact('sub_category','categories'));
    }

    public function sub_category_update(Request $request, $id)
    {

        $request->validate([
            'sub_category_name' => 'required',
            'sub_category_order' => 'required',
        ]);

        $sub_category = SubCategory::where('id',$id)->first();

        $sub_category->sub_category_name = $request->sub_category_name;
        $sub_category->show_on_menu = $request->show_on_menu;
        $sub_category->show_on_home = $request->show_on_home;
        $sub_category->sub_category_order = $request->sub_category_order;
        $sub_category->category_id = $request->category_id;
        $sub_category->update();

        


        return redirect()->route('admin_sub_catergory_show')->with('success', 'SubCategory Updated Successfully');
    }

    public function sub_category_delete($id)
    {
        # code...
        $category = SubCategory::where('id',$id)->first();
        $category->delete();

        return redirect()->route('admin_sub_catergory_show')->with('success', 'SubCategory Deleted Successfully');
    }
}
