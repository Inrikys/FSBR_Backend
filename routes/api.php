<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', function (Request $request) {
    return 'login';
})->name('login');   

Route::get('/teste', 'api\UserController@index')->name('teste.index');

Route::group(
    [
        'middleware' => [''],
        'namespace' => 'api'
    ], function () {

        Route::get('/users', 'UserController@index')->name('user.index'); 
        Route::get('/users/{id}', 'UserController@show')->name('user.show'); 
        Route::post('/users', 'UserController@store')->name('user.store');
        Route::put('/users/{id}', 'UserController@update')->name('user.update'); 
        Route::delete('/users/{id}', 'UserController@destroy')->name('user.destroy');  
});
