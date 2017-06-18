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


//LoginController
Route::get('/','LoginController@index');
Route::post('/','LoginController@giris_kontrol');
Route::post('/kayit','LoginController@store');
Route::get('/kayit','LoginController@get_kayit');
Route::get('/sifre-yenile','LoginController@sifre_yenile');
Route::post('/sifre-yenile','LoginController@sifre_yenile_kontrol');

Route::get('/sifre-sifirla/{url}/{hash}','LoginController@sifre_sifirla');
Route::post('/sifre-sifirla/','LoginController@post_sifre_sifirla');



//MailController
Route::get('/welcome','MailController@mail_gonder');



//GirisController
Route::get('/giris','GirisController@index');