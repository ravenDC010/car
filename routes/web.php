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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ViewCarController@index')->name('viewCar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/agencyhome', 'HomeController@agencyHome')->name('agencyhome')->middleware('is_agency');

Route::middleware('auth')->group(function () {

    Route::group(['middleware' => ['is_agency']], function () {

        Route::get('/agencyhome', 'HomeController@agencyHome')->name('agencyhome')->middleware('is_agency');
        Route::get('/addcar', 'CarController@index')->name('addcar');
        Route::post('/addcar/store',  'CarController@store');
        Route::get('/viewbookedcar', 'CustomerCarController@index')->name('viewbookedcar');
        Route::get('/viewbookedcar/{id}', 'CustomerCarController@viewCustomers');
    });

    Route::post('/viewcar/store',  'ViewCarController@store');


});
