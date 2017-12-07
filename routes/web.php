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

Route::get('/', function () {
    return view('welcome');
});
*/
Route::get("/", function(){
  return view("welcome");
})->name('main');

Route::get("/hola", function(){
    return 'hola';
});

Route::get('/home', 'HomeController@index')->name('home');

//crear y almacenar solicitudes
Route::group(['middleware'=>'auth'],function(){

    Route::name('create_application_path')->get("/home/createapplication",'ApplicationController@create');
    Route::name('store_application_path')->post("/home",'ApplicationController@store');

    Route::name('download_file')->get("/home/download/{document}",'DocumentController@downloadFile');

    Route::name('application_path')->get("/home/{application}",'ApplicationController@show');
    Route::name('review_application_path')->get("/home/{application}/review",'ApplicationController@review');
    Route::name('update_application_path')->put("/home/{application}",'ApplicationController@update');
});



Auth::routes();

