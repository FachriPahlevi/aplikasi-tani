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



//Route::resource('shops', 'ShopController') -> middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/', function(){
    return view('index');
} );

Route::get('/details', function(){
    return view('details');
} );

Route::get('/login', function(){
    return view('login');
} );

Route::get('/register', function(){
    return view('register');
} );