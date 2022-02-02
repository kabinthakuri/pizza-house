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

Route::get('/', [App\Http\Controllers\frontendController::class, 'index'])->name('pizza');
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::prefix('/pizza')->middleware('auth','admin')->group(function(){
    Route::get('/','App\Http\Controllers\PizzaController@index')->name('pizza.index');
    Route::get('/create','App\Http\Controllers\PizzaController@create')->name('pizza.create');
    Route::post('/store','App\Http\Controllers\PizzaController@store')->name('pizza.store');
    Route::get('/edit/{id}','App\Http\Controllers\PizzaController@edit')->name('pizza.edit');
    Route::put('/update/{id}','App\Http\Controllers\PizzaController@update')->name('pizza.update');
    Route::delete('/delete/{id}','App\Http\Controllers\PizzaController@destroy')->name('pizza.destroy');
    Route::get('/user/order','App\Http\Controllers\UserOrderController@index')->name('user.order');
    Route::post('/order/status/{id}','App\Http\Controllers\UserOrderController@orderStatus')->name('order.status');
    Route::get('/customers','App\Http\Controllers\UserOrderController@customer')->name('customer');
});



Route::get('/pizza/show/{id}','App\Http\Controllers\frontendController@show')->name('pizza.show');

Route::post('/pizza/order/{id}','App\Http\Controllers\frontendController@order')->name('pizza.order');