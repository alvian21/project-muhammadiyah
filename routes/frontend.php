<?php

Route::group(['prefix' => '/', 'namespace'=>'frontend'], function () {

    Route::resource('/', 'HomeController');
    Route::resource('berita', 'BeritaController');
    Route::resource('akreditasi', 'AkreditasiController');
});
