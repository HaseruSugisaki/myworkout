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
    return view('welcome');
});
//ログイン
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ホーム
Route::get('/homes', 'HomesController@index');

//トレーニングメニュー
Route::get('/menus', 'MenuController@index');
Route::get('/menu/create', 'MenuController@edit');
Route::post('/menus/store', 'MenuController@store');
Route::get('/menus/delete/{id}', 'MenuController@delete');


//トレーニング記録
// Route::get('/records', 'RecordController@index');
Route::get('/creates/{id}', 'RecordController@create');
Route::get('/aerobics/{id}', 'RecordController@aerobic');
Route::post('/records/store', 'RecordController@store');
Route::post('/records/aero', 'RecordController@aero');
Route::get('/records/search', 'RecordController@search');
Route::get('/records/part', 'RecordController@part');
Route::get('/records/event', 'RecordController@event');


//体重記録
Route::get('/weights', 'WeightController@index');
Route::get('/weights/record', 'WeightController@record');