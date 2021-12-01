<?php

use Illuminate\Http\Request;

Route::get('/note','Api\Notecontroller@index');
Route::post('/note','Api\Notecontroller@store');