<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return 'Bienvenido al Api  👍';
});

Route::get('/admin', function(){
    return 'Bienvenido al Api V2 👍';
});