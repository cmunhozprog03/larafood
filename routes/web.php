<?php

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {

        /**
         * Routes Details_plan
         */
        Route::post('plans/{url}/details', 'DetailPlanController@store')->name('details.plan.store');
        Route::get('plans/{url}/details/create', 'DetailPlanController@create')->name('details.plan.create');
        Route::get('plans/{url}/details', 'DetailPlanController@index')->name('details.plan.index');
        /*
                * Routes plans
                */
        Route::get('plans/create', 'PlanController@create')->name('plans.create');
        Route::put('plans/{url}', 'PlanController@update')->name('plans.update');
        Route::get('plans/{url}/edit', 'PlanController@edit')->name('plans.edit');
        Route::any('plans/search', 'PlanController@search')->name('plans.search');
        Route::delete('plans/{url}', 'PlanController@destroy')->name('plans.destroy');
        Route::get('plans/{url}', 'PlanController@show')->name('plans.show');
        Route::post('plans', 'PlanController@store')->name('plans.store');
        Route::get('plans', 'PlanController@index')->name('plans.index');

        /*
                * Home Dashboard
                */
        Route::get('/', 'PlanController@index')->name('admin.index');
    });
// Routes Plans


Route::get('/', function () {
    return view('welcome');
});
