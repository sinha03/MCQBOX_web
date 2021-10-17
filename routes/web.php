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
/*Route::get('/login', function () {
    return view('quiz1.login');
});*/
Route::get('/quiz', function () {
    return view('quiz1.quiz');
});
Route::get('/introduction', function () {
    return view('quiz1.introduction');
});
Route::get('/technology', function () {
    return view('quiz1.technology');
});
Route::get('/services', function () {
    return view('quiz1.services');
});
Route::get('/why_mcq', function () {
    return view('quiz1.why_mcq');
});
Route::get('/mcqapp', function () {
    return view('quiz1.mcqapp');
});
Route::get('/about', function () {
    return view('quiz1.about');
});
Route::get('/about_service', function () {
    return view('quiz1.about_service');
});
Route::get('/team', function () {
    return view('quiz1.team');
});
Route::get('/contact', function () {
    return view('quiz1.contact');
});
Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('quiz1.login');
});

Route::get('/adminlogin', function () {
    return view('quiz1.adminlogin');
});



Route::get('/add_mcq', function () {
    return view('adminpanel.add_mcq');

});
/*Route::get('/showlist', function () {
    return view('adminpanel.showlist');

});*/

Auth::routes();
Route::get('/', 'HomeController@index');// so when you logged out it go back 
Route::get('/home', 'HomeController@index');

Route::post('list_course/{id}', array('uses' => 'Api\Auth\AdminController@list_subject'))->name('list_subject');

Route::post('chapterlist/{list_subject}/{id}','Api\Auth\AdminController@chapterlist')->name('chapterlist');

//Route::get('show_data/{id}','Api\Auth\AdminController@show_course_data');

Route::post('showlist/{id}', array('uses' => 'Api\Auth\AdminController@add_question'))->name('add_question');
Route::post('subject_list','Api\Auth\AdminController@course')->name('course');

Route::get('chapter_name/{id}/{course}','HomeController@chapter_name1')->name('chapter_name1');

Route::post('chapter_name/{id}/{course}','Api\Auth\AdminController@chapter_name')->name('chapter_name');

Route::post('Add_formula/{id}','Api\Auth\AdminController@add_formula')->name('add_formula');

Route::get('Add_formula/{id}','HomeController@add_formula1')->name('add_formula1');

Route::get('Show_formula/{id}','HomeController@show_formula1')->name('show_formula1');

Route::get('/chapterlist/{list_subject}/{id}/{check_action}','HomeController@chapter_based')->name('chapter_based');

Route::get('show_chapter_list/{id}','HomeController@show_chapter_list')->name('show_chapter_list');

Route::get('single_list/{chapter_id}','HomeController@show_course_data')->name('show_course_data');

Route::get('/list_course/{id}','HomeController@list_course');

Route::get('/add_mcq','HomeController@course_1')->name('course_1');

Route::get('/subject_list','HomeController@course_2')->name('course_2');

//Route::get('/subject_list', 'HomeController@subject_list')->name('subject_list');
Route::get('/showlist', 'HomeController@showlist')->name('showlist');
Route::get('/physics1', 'HomeController@physics1')->name('physics1');
Route::get('/physics2', 'HomeController@physics2')->name('physics2');
Route::get('/chemistry1', 'HomeController@chemistry1')->name('chemistry1');
Route::get('/chemistry2', 'HomeController@chemistry2')->name('chemistry2');
Route::get('/biology2', 'HomeController@biology2')->name('biology2');
Route::get('/biology1', 'HomeController@biology1')->name('biology1');
Route::get('/math1', 'HomeController@math1')->name('math1');
Route::get('/math2', 'HomeController@math2')->name('math2');

//Route::post('physics1','Api\Auth\AdminEntry@showlist')->name('showlist');

Route::post('formula', 'Api\Auth\AdminEntry@formula')->name('formula');
Route::get('showphy', 'Api\Auth\AdminEntry@formula_show');

Route::get('delete_course/{id}/{course}','HomeController@delete_course');
Route::get('edit_course/{id}/{course}','HomeController@edit_course');
Route::post('update_course/{course}','HomeController@update_course')->name('update_course');

Route::get('delete_chapterlist/{list_id}/{list_subject}','HomeController@delete_chapterlist');
Route::get('edit_chapterlist/{list_id}/{list_subject}','HomeController@edit_chapterlist');
Route::post('update_chapterlist/{id}','HomeController@update_chapterlist')->name('update_chapterlist');

Route::get('delete_chapter/{question_id}/{check_question}','HomeController@delete');
Route::get('edit_chapter/{question_id}/{check_question}','HomeController@edit');
Route::post('update/{check_question}','HomeController@update')->name('update');

Route::get('delete_formula/{all_id}','HomeController@delete_formula');
Route::get('edit_formula/{all_id}','HomeController@edit_formula');
Route::post('update_formula/{id}','HomeController@update_formula')->name('update_formula');


Route::get('delete_chapter/{chap_id}','HomeController@delete_chapter');
Route::get('edit_chapter/{chap_id}','HomeController@edit_chapter');
Route::post('update_chapter/{id}/{course}','HomeController@update_chapter')->name('update_chapter');