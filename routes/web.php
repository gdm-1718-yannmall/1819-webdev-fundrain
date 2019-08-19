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
Auth::routes();

Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/{article}', 'NewsController@show');

Route::name('pages.')->group(function (){
    Route::get('/', 'PagesController@index')->name('welcome');
    Route::get('/home', 'PagesController@home')->name('home');
    Route::get('/services', 'PagesController@services')->name('services');
    Route::get('/about', 'PagesController@about')->name('about');
    Route::get('/contact', 'PagesController@contact')->name('contact');
});

Route::name('backoffice.')->group(function (){
    Route::get('/dashboard', 'BackofficeController@index')->middleware('auth');
});

Route::resource('projects', 'projectsController');
Route::post('/projects/{project}/comments', 'ProjectCommentController@store')->middleware('auth');
//Route::get('/projects', 'ProjectsController@index');
// Route::get('/{category}', 'ProjectsController@category');




//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/{page}', 'PagesController@getPage');
