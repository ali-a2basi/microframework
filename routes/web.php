<?php

use App\Core\Routing\Route;
use App\Middleware\BlockFirefox;
use App\Middleware\BlockIE;

// Route::add(['get', 'put'],'/b');
// Route::get('/home', ['HomeController', 'index']);

// Route::get('/', function(){

//     echo "welcome";
// });


// Route::get('/checkMiddleware', 'HomeController@index', [BlockFirefox::class]);


Route::get('/post/{slug}', 'PostController@Slug');
Route::get('/post/{slug}', 'PostController@Comment');


