<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/users/{id}',function($id){
    return 'this is user '.$id;
});
*/
/*
Route::get('/', function () {
    return (' hello  world welcome');
});
*/
/*Route::get('/users/{id}/{name}',function($id,$name){
    return 'this is user id '.$id. 'and his name is '.$name;
});*/

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/services', 'PageController@services');



Route::resource('posts','PostController');
//Route::post('create', 'PostController');



