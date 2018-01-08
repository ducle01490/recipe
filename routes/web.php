<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', array('as' => 'homepage', function () {
    return view('index');
}));


Route::group(['prefix' => 'recipes'], function () {
	// Lay danh sach recipes
	Route::get('/', array('as' => 'recipes', 'uses' => 'RecipeController@index'));
	Route::get('/detail/{recipe_id}', array('as' => 'recipe_detail', 'uses' => 'RecipeController@detail'));
});


Route::group(['prefix' => 'orders'], function () {
	// Lay danh sach recipes
	Route::any('add', array('as' => 'add_order', 'uses' => 'OrderController@add'));
});

Route::group(['prefix' => 'menus'], function () {
	// Lay danh sach recipes
	Route::get('/', array('as' => 'menu', 'uses' => 'PlanController@index'));
	Route::get('/two', array('as' => 'plan_two', 'uses' => 'PlanController@two'));
	Route::get('/family', array('as' => 'plan_family', 'uses' => 'PlanController@family'));
	Route::get('/detail/{title}', array('as' => 'plan_detail', 'uses' => 'PlanController@detail'));
});