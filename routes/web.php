<?php

Route::get('/index','homecontroller@index')->name('home');
Route::resource('/note','Notecontroller');
