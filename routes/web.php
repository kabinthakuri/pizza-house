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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('/pizza')->middleware('auth','admin')->group(function(){
    Route::get('/','App\Http\Controllers\PizzaController@index')->name('pizza.index');
    Route::get('/create','App\Http\Controllers\PizzaController@create')->name('pizza.create');
    Route::post('/store','App\Http\Controllers\PizzaController@store')->name('pizza.store');
    Route::get('/edit/{id}','App\Http\Controllers\PizzaController@edit')->name('pizza.edit');
    Route::put('/update/{id}','App\Http\Controllers\PizzaController@update')->name('pizza.update');
    Route::delete('/delete/{id}','App\Http\Controllers\PizzaController@destroy')->name('pizza.destroy');

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
