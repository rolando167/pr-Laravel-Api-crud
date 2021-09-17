<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', 'ArticleController@index');
Route::get('/{article}', 'ArticleController@show');
Route::post('save', 'ArticleController@store');
Route::put('update/{article}', 'ArticleController@update');
Route::delete('delete/{article}', 'ArticleController@delete');