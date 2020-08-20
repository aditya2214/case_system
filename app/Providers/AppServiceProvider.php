<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        date_default_timezone_set("Asia/Bangkok");

        $casemodel = \App\CaseModel::count();
        view()->share('casemodel', $casemodel);

        $receiving = \App\CaseModel::where('status','0')->count();
        view()->share('receiving', $receiving);

        $inprogres = \App\CaseModel::where('status','1')->count();
        view()->share('inprogres', $inprogres);

        $picking = \App\CaseModel::where('status','2')->count();
        view()->share('picking', $picking);

        $packing = \App\CaseModel::where('status','3')->count();
        view()->share('packing', $packing);

        $export = \App\CaseModel::where('status','4')->count();
        view()->share('export', $export);

        $ng = \App\CaseModel::where('status','5')->count();
        view()->share('ng', $ng);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
