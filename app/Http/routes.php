<?php
use \App\Http\Controllers\ProcessosController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ProcessosController@index')->name('index.view');
Route::post('/processos', 'ProcessosController@store');
Route::delete('/processos/{id}', 'ProcessosController@destroy');
// Route::match(['get', 'put'], '/processos/edit/{id}', 'ProcessosController@edit');
Route::get('/processos/edit/{id}', 'ProcessosController@edit');
Route::put('/processos/edit/{id}', 'ProcessosController@update');