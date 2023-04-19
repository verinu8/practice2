<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot(){
        Paginator::useBootstrap();
        
        //Paginator::useBootstrapFive();
        //またはPaginator::useBootstrapFour();
    }
}

    {
        //
    }

{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
     
}
