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

/*
 * Requires authentication (un-authenticated users are redirected to a login page).
 *
 */
Route::group( [ 'middleware' => 'auth'], function(){
    Route::get('/', function () {
        return view('welcome');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
