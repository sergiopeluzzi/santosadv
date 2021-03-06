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

use Illuminate\Support\Facades\Auth;

Route::get('/', 'SiteController@index')->name('site.inicio');

Route::get('/atuacao', 'SiteController@atuacao')->name('site.atuacao');

Route::get('/advogados', 'SiteController@advogados')->name('site.advogados');

Route::get('/noticias', 'SiteController@noticias')->name('site.noticias');

Route::get('/contato', 'SiteController@contato')->name('site.contato');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/configs', 'ConfigsController@index')->name('configs.index')->middleware('auth');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
