<?php

Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboard', function () {
        return view('admin.main');
    });
});
