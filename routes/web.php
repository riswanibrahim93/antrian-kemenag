<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\AdminController;
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

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pilihPetugas', function () {
    return view('pengunjung/pilihAdmin');
});
Route::get('/viewpengunjung', function () {
    return view('pengunjung/viewpengunjung');
});
Route::get('/menu', function () {
    return view('pengunjung/menu');
});
Route::get('/tambah', function () {
    return view('petugas/tambah_petugas');
});

// Route::get('/pengunjunglama', function () {
//     return view('pengunjung/view');
// });
// Route::get('/loket', function () {
//     return view('pengunjung/loket');
// });
// Route::get('/daftarpetugas', function () {
//     return view('petugas/petugas');
// });
// Route::get('/rekappengunjung', function () {
//     return view('petugas/rekap');
// });
// Route::get('/edits', function () {
//     return view('petugas/edit_petugas');
// });
// Route::get('/login', function () {
//     return view('petugas/login');
// });
// Route::get('/register', function () {
//     return view('petugas/register');
// });


// Route::get('/pengunjung1', function () {
//     return view('pengunjung/updateantrian');
// });

// Route::get('/pengunjung', 'AntrianController@Pengunjung')->name('pengunjung');
// Route::get('/print', 'AntrianController@print')->name('antrianA1');

Route::get('/adminA1', 'AntrianController@Admin1')->name('antrianA1');
Route::get('/adminA2', 'AntrianController@Admin2')->name('antrianA2');
Route::get('/panggilAntrianA1', 'AntrianController@panggilAdmin1')->name('panggilAntrianA1');
Route::get('/panggilAntrianA2', 'AntrianController@panggilAdmin2')->name('panggilAntrianA2');

Route::post('/antrian', 'AntrianController@create')->name('antrian');
Route::get('/reset', 'AntrianController@reset')->name('reset');
Route::get('/pengunjung', 'AntrianController@Pengunjung')->name('pengunjung');

Route::get('/viewnomor', 'AntrianController@ViewNomor')->name('viewnomor');
Route::get('/viewadmin', 'AntrianController@ViewAdmin')->name('viewadmin');
Route::get('/viewjml', 'AntrianController@ViewJml')->name('viewjml');


Auth::routes();
Route::group(['middleware' => 'auth'], function(){
    Route::resource('/kelolaAdmin', 'AdminController');
    Route::get('/rekappengunjung', 'AntrianController@historiAntrian')->name('rekappengunjung');
});


