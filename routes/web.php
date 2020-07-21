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

/* Awalan/Index Website */
Route::get('/', function () {
    return view('awal');
});

/* Read + Cari di 3 Menu Detil */
Route::get('/product','Utama@product');
Route::get('/product/cari','Utama@cariproduk');
Route::get('/event','Utama@event');
Route::get('/event/cari','Utama@cariacara');
Route::get('/education','Utama@education');
Route::get('/education/cari','Utama@cariedukasi');
Route::get('/education/{id}','Utama@educationid');

/* CUD Product */
Route::get('/product/tambah','ProductNanobox@product_tambah');
Route::get('/productedit','ProductNanobox@productedit');
Route::post('/product/store','ProductNanobox@product_store');
Route::get('/product/edit/{id}','ProductNanobox@product_edit');
Route::put('/product/update/{id}','ProductNanobox@product_update');
Route::get('/product/hapus/{id}','ProductNanobox@product_hapus');

/* CUD Event */
Route::get('/event/tambah','EventNanobox@event_tambah');
Route::get('/eventedit','EventNanobox@eventedit');
Route::post('/event/store','EventNanobox@event_store');
Route::get('/event/edit/{id}','EventNanobox@event_edit');
Route::put('/event/update/{id}','EventNanobox@event_update');
Route::get('/event/hapus/{id}','EventNanobox@event_hapus');

/* CUD Education */
Route::get('/education/tambah','EducationNanobox@education_tambah');
Route::get('/educationedit','EducationNanobox@educationedit');
Route::post('/education/store','EducationNanobox@education_store');
Route::get('/education/edit/{id}','EducationNanobox@education_edit');
Route::put('/education/update/{id}','EducationNanobox@education_update');
Route::get('/education/hapus/{id}','EducationNanobox@education_hapus');


/* Melakukan pelaksanaan authentikasi pengguna/login */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

