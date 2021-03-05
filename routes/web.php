<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;

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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pengunjung', function () {
    return view('pengunjung/view');
});

Route::get('/pengunjunglagi', function () {
    return view('pengunjung/view2');
});

Route::get('/antrianA1', 'AntrianController@panggilAdmin1')->name('antrianA1');
Route::get('/antrianA2', 'AntrianController@panggilAdmin2')->name('antrianA2');
Route::post('/antrian', 'AntrianController@create')->name('antrian');
Route::get('/reset', 'AntrianController@reset')->name('reset');