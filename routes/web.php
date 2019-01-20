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


//index page
Route::get('/', 'landingcontroller@homepage');
//Auth routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//instant login access
Route::get('/quick-login', 'landingcontroller@quick');
//terms
Route::get('/terms', 'landingcontroller@terms');
//auth routes



//lec 
//route group to protect  lecturer routes from guests,stu and admin
Route::group(['middleware' => 'lecmware'], function(){
//pages
//Route::get('/dashboard-lec', 'leccontroller@dash');
Route::get('/file-upload', 'leccontroller@upload');

//upload file
Route::post('/upload', 'leccontroller@uploadfile')->name('upload');
//search
Route::get('/lec-search', 'leccontroller@lec_search')->name('lec_search');
//delete file
Route::delete('/delete-file', 'leccontroller@delete_file')->name('delete_file');
});
//route group to protect  lecturer routes from guests,stu and admin
//lec





//admin
//route group to protect  lecturer routes from guests,stu and admin
Route::group(['middleware' => 'adminmware'], function(){
//pages
Route::get('/activation', 'admincontroller@activate');
Route::get('/users', 'admincontroller@users');
Route::get('/news', 'admincontroller@news');
Route::get('/courses', 'admincontroller@add_course');

//approve staff
Route::post('/approve', 'admincontroller@app')->name('app');
//decline staff
Route::post('/decline', 'admincontroller@dec')->name('dec');

//decline staff
Route::delete('/delete-user', 'admincontroller@del')->name('del');

//decline staff
Route::post('/news-update', 'admincontroller@news_update')->name('news');

//add course
Route::post('/save-course', 'admincontroller@save_course')->name('save');

//edit course
Route::post('/edit-course', 'admincontroller@edit_course')->name('edit');

//edit news
Route::post('/edit-news', 'admincontroller@edit_news');

//del course
Route::DELETE('/delete-course', 'admincontroller@delete_course')->name('delete');

//initial loads....................................................
//load course for crud
Route::get('/load-course', 'admincontroller@load_course')->name('load_cos');
//load course for crud
Route::get('/load-staff', 'admincontroller@load_staff')->name('load_staff');
//load users for del
Route::get('/load-users', 'admincontroller@load_users')->name('load_users');
//load news
Route::get('/load-news', 'admincontroller@load_news')->name('load_news');
//initial loads....................................................
});
//admin



//stu
//route group to protect  lecturer routes from guests,stu and admin
Route::group(['middleware' => 'stumware'], function(){
//pages
Route::get('/download', 'stucontroller@dd');
Route::get('/course', 'stucontroller@cos');
//pages

//course update
Route::post('/course-update', 'stucontroller@course')->name('course');
//direct download
Route::get('/direct-download/{file}', 'stucontroller@direct_download');
//search
Route::get('/stu-search', 'stucontroller@stu_search')->name('stu_search');

});
//stu