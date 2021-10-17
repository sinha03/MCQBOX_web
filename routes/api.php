<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Route::post('physics1', array('uses' =>  'Api\Auth\PhysicsController@store'))->name('physics1');


Route::post('login', array('uses' => 'Api\Auth\RegController@register'))->name('login');
Route::post('adminlogin', array('uses' => 'Api\Auth\AdminController@login1'))->name('adminlogin');
//Route::post('course_list', array('uses' => 'Api\Auth\AdminController@course'))->name('course');
Route::get('courses', array('uses' => 'Api\Auth\AdminController@course_list'))->name('course_list');
Route::get('showcourselist', 'Api\Auth\AdminController@show_courselist');
Route::get('mixed_model', 'Api\Physics1\Phy1ModelController@show_mixed');


Route::get('formula',  array('uses' => 'Api\Auth\AdminController@formula'))->name('formula');

/*Route::post('formula', array('uses' => 'Api\Auth\FormulaController@store'))->name('store');
Route::post('formula', array('uses' => 'Api\Auth\FormulaController@store'))->name('store');
Route::get('formula/{id}', 'Api\Auth\FormulaController@show');*/

Route::get('questionlist/{id}',  array('uses' => 'Api\Auth\AdminController@show_questionlist'))->name('show_questionlist');

Route::get('showmodel/{id}',  array('uses' => 'Api\Auth\AdminController@show_model'))->name('show_model');

Route::get('showmodellist',  array('uses' => 'Api\Auth\AdminController@show_model1'))->name('show_model1');
Route::get('chaptername/{id}',  array('uses' => 'Api\Auth\AdminController@chaptername'))->name('chaptername');

Route::get('phy1shortcut/{id}',  array('uses' => 'Api\Auth\AdminController@phy1shortcut'))->name('phy1shortcut');

/*Route::post('formulache', array('uses' => 'Api\Auth\FormulaController@store1'))->name('store1');
Route::get('formulache/{id}', 'Api\Auth\FormulaController@show1');

Route::post('formulamath', array('uses' => 'Api\Auth\FormulaController@store2'))->name('store2');
Route::get('formulamath/{id}', 'Api\Auth\FormulaController@show2');*/

/*physics1 chapter*/
Route::get('phy1modeltest', 'Api\Auth\AdminController@modeltest');
/*Route::get('phy1modeltest2/{id}', 'Api\Physics1\Chapter1Controller@chapter1');

Route::get('phychapter1/{third_id}/{second_id}/{id}', 'Api\Physics1\Chapter1Controller@chapter3');*/

Route::get('phychapter4/{id}', array('uses' => 'Api\Auth\AdminController@phychapter4'))->name('phychapter4');
/*Route::get('phychapter4/{second_id}/{id}', 'Api\Physics1\Chapter4Controller@chapter5');
Route::get('phychapter4/{third_id}/{second_id}/{id}', 'Api\Physics1\Chapter4Controller@chapter6');

Route::get('phychapter7/{id}', 'Api\Physics1\Chapter7Controller@chapter7');
Route::get('phychapter7/{second_id}/{id}', 'Api\Physics1\Chapter7Controller@chapter8');
Route::get('phychapter7/{third_id}/{second_id}/{id}', 'Api\Physics1\Chapter7Controller@chapter9');
Route::get('phychapter7/{forth_id}/{third_id}/{second_id}/{id}', 'Api\Physics1\Chapter7Controller@chapter10');*/






Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
