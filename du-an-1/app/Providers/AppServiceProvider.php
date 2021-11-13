<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
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
        $category = DB::table('category')->where('CatActive','=',1)->Get();
//        $countpd = DB::table('category')
//            ->join('product', 'category.CategoryId','=','product.CategoryId')
//            ->select('product.*','category.CategoryId')
//            ->where('CatActive','=',1)
//            ->where('Active','=',1)
//            ->Get();
//        dd($countpd);
        view()->share(compact('category'));
        Paginator::useBootstrap();

    }
}
