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


Route::get('recipes', array('as' => 'recipes', 'uses' => 'RecipeController@index'));

Route::get('recipe_detail/{recipe_id}', array('as' => 'recipe_detail', 'uses' => 'RecipeController@detail'));

// Route::get('/recipe_detail', array('as' => 'recipe_detail', function () {
//     return view('recipe_detail');
// }));

Route::get('/plan_two', array('as' => 'plan_two', function () {
    return view('plan.two');
}));

Route::get('/plan_family', array('as' => 'plan_family', function () {
    return view('plan.family');
}));

Route::get('/plan_detail', array('as' => 'plan_detail', function () {
    return view('plan.detail');
}));