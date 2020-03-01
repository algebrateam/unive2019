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
Route::get('/childblade', function () {
    return view('childprimjer');
});

Route::get('predmets/top10','PredmetController@top10');
Route::resource('predmets','PredmetController');

Route::get('/', function () {
    return view('welcome');
});
Route::view('/welcome','welcome', ['name' => '1Taylor'])
  ->where('name', '[A-Za-z]+')
  ->name('wilcommen');
Route::get('/w/', function () {
    return "Heloo ja sam prva GET ruta!";
});
Route::get('/pozdrav/{ime?}', function ($ime='marica') {
    return "Dobrodoslaaaa ".$ime;
})
  ->where('ime', '[A-Za-z]+[1-9]');
Route::get('/probna/','probniController@probnaFunkcija')
  ->name('probna');

Route::redirect('/here', '/there');
Route::get('/there', function () {
    return "ja sam redirektan sa route here";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
