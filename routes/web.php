<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\Controller@home');
Route::get('/blog', 'App\Http\Controllers\Controller@blog');
Route::get('/imprint', 'App\Http\Controllers\Controller@imprint');
Route::get('/presskit', 'App\Http\Controllers\Controller@presskit');
Route::get('/vacancies', 'App\Http\Controllers\Controller@vacancies');

Route::get('/blog/{id}/post', 'App\Http\Controllers\Controller@blogpost')->name('blog.post');


//Adminpanel
Route::get('/adminpanel','App\Http\Controllers\AdminController@login');
Route::post('/adminpanel/check','App\Http\Controllers\AdminController@check')->name('adminpanel.check');

Route::group(['middleware'=>['AuthCheck']],function (){


    Route::get('/adminpanel/logout','App\Http\Controllers\AdminController@logout')->name('adminpanel.logout');
    Route::get('/adminpanel/settings','App\Http\Controllers\AdminController@settings')->name('adminpanel.settings');

    Route::get('/adminpanel/lk/{adm}/edit','App\Http\Controllers\AdminController@lkedit' )->name('adminpanel.lkedit');
    Route::post('/adminpanel/lk/{adm}/edit','App\Http\Controllers\AdminController@lkeditsubmit' )->name('adminpanel.lkeditsubmit');


    Route::get('/adminpanel/addvac','App\Http\Controllers\AdminController@showvac')->name('adminpanel.vacancies');
    Route::get('/adminpanel/vaccheck','App\Http\Controllers\AdminController@vaccheck')->name('adminpanel.vaccheck');

    Route::get('/adminpanel/vacchange/{id}/edit', 'App\Http\Controllers\AdminController@vacedit')->name('adminpanel.vacedit');
    Route::post('/adminpanel/vacchange/{id}/edit', 'App\Http\Controllers\AdminController@vaceditsubmit')->name('adminpanel.vaceditsubmit');
    Route::get('/adminpanel/vacchange/{id}/delete', 'App\Http\Controllers\AdminController@vacdelete')->name('adminpanel.vacdelete');


    Route::get('/adminpanel/addblog','App\Http\Controllers\AdminController@showblog')->name('adminpanel.blog');
    Route::get('/adminpanel/blogcheck','App\Http\Controllers\AdminController@blogcheck')->name('adminpanel.blogcheck');

    Route::get('/adminpanel/blogchange/{id}/edit', 'App\Http\Controllers\AdminController@blogedit')->name('adminpanel.blogedit');
    Route::post('/adminpanel/blogchange/{id}/edit', 'App\Http\Controllers\AdminController@blogeditsubmit')->name('adminpanel.blogeditsubmit');
    Route::get('/adminpanel/blogchange/{id}/delete', 'App\Http\Controllers\AdminController@blogdelete')->name('adminpanel.blogdelete');


});
