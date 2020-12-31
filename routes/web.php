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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@index',
    'as' => 'home_path'
]);

Route::get('/paginas-web/', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@web',
    'as' => 'web_path'
]);
Route::get('/community-manager/', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@community',
    'as' => 'community_path'
]);
Route::get('/logos-branding/', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@logos',
    'as' => 'logos_path'
]);
Route::get('/tiendas-online/', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@tiendas',
    'as' => 'tiendas_path'
]);
