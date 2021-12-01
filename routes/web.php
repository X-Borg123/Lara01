<?php

Route::get('/','homecontroller@index')->name('home');
Route::resource('/note','Notecontroller');
