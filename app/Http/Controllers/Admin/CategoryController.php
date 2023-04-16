<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function catergory_show()
    {
        # code...
        $category = Category::orderBy('category_order','asc')->get();
       return  view('admin.pages.category',compact('category'));
    }

    public function category_create()
    {
        # code...
        return  view('admin.pages.category_create');
       
    }
    public function category_submit(Request $request)
    {
        # code...
        $request->validate([
            'category_name' => 'required',
            'category_order' => 'required',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->show_on_menu = $request->show_on_menu;
        $category->category_order = $request->category_order;
        $category->save();

        return redirect()->route('admin_catergory_show')->with('success', 'Category Created Successfully');
       
    }
    public function category_edit($id)
    {
        $category = Category::where('id',$id)->first();
        return view('admin.pages.category_edit', compact('category'));
    }

    public function category_update(Request $request, $id)
    {

        $request->validate([
            'category_name' => 'required',
            'category_order' => 'required',
        ]);

        $category = Category::where('id',$id)->first();

        $category->category_name = $request->category_name;
        $category->show_on_menu = $request->show_on_menu;
        $category->category_order = $request->category_order;
        $category->update();

        


        return redirect()->route('admin_catergory_show')->with('success', 'Category Updated Successfully');
    }

    public function category_delete($id)
    {
        # code...
        $category = Category::where('id',$id)->first();
        $category->delete();

        return redirect()->route('admin_catergory_show')->with('success', 'Category Deleted Successfully');
    }
}
