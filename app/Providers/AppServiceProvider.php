<?php

namespace App\Providers;

use App\Models\SidebarAdvertisement;
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
        $top_ad = TopAdvertisment::where('id', 1)->first();
        $sidebar_ad = SidebarAdvertisement::where('sidebar_ad_location', 'Buttom')->get();
        view()->share('global_top_ad',$top_ad);
        view()->share('global_sidebar_ad',$sidebar_ad);
    }
}
