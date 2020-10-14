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

Route::resource('movies', 'MovieController');
Route::get('/movies.viewTable', 'MovieController@viewTable');
Route::resource('entrances', 'EntranceController');
Route::resource('rooms', 'RoomController');
Route::resource('premieres', 'PremiereController');
Route::resource('consumables', 'ConsumableController');

Route::resources([
    'movies'=>'MovieController',
    'consumibles'=>'ConsumableController',
    'entrances'=>'EntranceController',
    'rooms' => 'RoomController',
    'premieres' => 'PremiereController'
]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
