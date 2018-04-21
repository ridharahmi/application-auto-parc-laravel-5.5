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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/GestionStatistique', 'HomeController@statistique');
Route::get('/Alert', 'HomeController@alert');

Route::resource('GestionVehicules', 'VehiculesController');

Route::resource('GestionChauffeur', 'ChauffeurController');

Route::resource('GestionFournisseur', 'FournisseurController');

Route::resource('GestionMission', 'MissionController');

Route::resource('GestionMaintenance', 'MaintenanceController');

Route::resource('GestionSinistre', 'SinistreController');

Route::resource('GestionPapier', 'PapierController');
