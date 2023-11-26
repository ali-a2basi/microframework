<?php

use App\Core\Routing\Route;



Route::add(['get', 'put'],'/b');
Route::get('/home', ['HomeController', 'index']);

Route::get('/', function(){

    echo "welcome";
});


Route::get('/checkMiddleware', 'HomeController@index', []);


