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

route::get('movies-pdf', 'MovieController@exportToPDF')->name('movies.pdf');
route::get('rooms-pdf', 'RoomController@exportToPDF')->name('rooms.pdf');
route::get('consumibles-pdf', 'ConsumableController@exportToPDF')->name('consumibles.pdf');
route::get('entrances-pdf', 'EntranceController@exportToPDF')->name('entrances.pdf');
route::get('premieres-pdf', 'PremiereController@exportToPDF')->name('premieres.pdf');

route::get('/moviesXLS', 'MovieController@exportToXls');
route::get('/moviesCSV', 'MovieController@exportToCsv');

route::get('/roomsXLS', 'RoomController@exportToXls');
route::get('/roomsCSV', 'RoomController@exportToCsv');

route::get('/consumablesXLS', 'ConsumableController@exportToXls');
route::get('/consumablesCSV', 'ConsumableController@exportToCsv');

route::get('/entrancesXLS', 'EntranceController@exportToXls');
route::get('/entrancesCSV', 'EntranceController@exportToCsv');

route::get('/premieresXLS', 'PremiereController@exportToXls');
route::get('/premieresCSV', 'PremiereController@exportToCsv');

Route::get('graficas.graficarPeliculas', 'GraficasController@graficarPeliculas')->name('movies.grafica');
Route::get('graficas.graficarSalas', 'GraficasController@graficarSalas')->name('rooms.grafica');
Route::get('graficas.graficarAlimentos', 'GraficasController@graficarAlimentos')->name('consumables.grafica');
Route::get('graficas.graficarEntradas', 'GraficasController@graficarEntradas')->name('entrances.grafica');
Route::get('graficas.graficarFunciones', 'GraficasController@graficarFunciones')->name('premieres.grafica');

Route::get('/moviesxml', function(){
    $movies = App\Movie::all();
    return response()->xml(['movies' => $movies->toArray()]);
});

Route::get('/roomsxml', function(){
    $rooms = App\Room::all();
    return response()->xml(['rooms' => $rooms->toArray()]);
});

Route::get('/consumablesxml', function(){
    $consumables = App\Consumable::all();
    return response()->xml(['consumables' => $consumables->toArray()]);
});

Route::get('/entrancesxml', function(){
    $entrances = App\Entrance::all();
    return response()->xml(['entrances' => $entrances->toArray()]);
});

Route::get('/premieresxml', function(){
    $premieres = App\Premiere::all();
    return response()->xml(['premieres' => $premieres->toArray()]);
});

