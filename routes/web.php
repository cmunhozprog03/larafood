<?php

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {


        Route::resource('formteste', 'FormTesteController');
        /**
         * Routes Profile
         */

        Route::any('profiles/search', 'ACL\ProfileController@search')->name('profiles.search');
        Route::resource('profiles', 'ACL\ProfileController');

        /**
                 
         * Routes Details_plan
         */

        Route::get('plans/{url}/details/create', 'DetailPlanController@create')->name('details.plan.create');

        Route::delete('plans/{url}/details/{idDetail}', 'DetailPlanController@destroy')->name('details.plan.destroy');
        Route::get('plans/{url}/details/{idDetail}', 'DetailPlanController@show')->name('details.plan.show');
        Route::put('plans/{url}/details/{idDetail}', 'DetailPlanController@update')->name('details.plan.update');
        Route::get('plans/{url}/details/{idDetail}/edit', 'DetailPlanController@edit')->name('details.plan.edit');
        Route::post('plans/{url}/details', 'DetailPlanController@store')->name('details.plan.store');
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
