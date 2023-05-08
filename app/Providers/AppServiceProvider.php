<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Pages;
use App\Models\SidebarAdvertisement;
use App\Models\SubCategory;
use App\Models\TopAdvertisment;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $page_status = Pages::where('id', 1)->first();
        $contact = Contact::where('id', 1)->first();
        $top_ad = TopAdvertisment::where('id', 1)->first();
        $sidebar_ad = SidebarAdvertisement::where('sidebar_ad_location', 'Buttom')->get();
        $category = Category::with('rSubCategory')->where('show_on_menu', 'Show')->Orderby('category_order', 'asc')->get();
        


        view()->share('global_page_status',$page_status);
        view()->share('global_contact',$contact);
        view()->share('global_top_ad',$top_ad);
        view()->share('global_sidebar_ad',$sidebar_ad);
        view()->share('global_categories',$category);
        
    }
}
