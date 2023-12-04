<?php

use App\Core\Routing\Route;

use App\Middleware\BlockFirefox;
use App\Middleware\BlockIE;



Route::add(['get', 'put'],'/b');
Route::get('/home', 'HomeController@index');


Route::get('/todo/list', 'TodoController@list');
Route::get('/checkMiddleware', 'HomeController@index', [BlockFirefox::class, BlockIE::class]);




Route::get('/post/{slug}', 'PostController@Slug');




