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

// Route::get('/', function () {
Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '.*');

Route::post('/comment/new', 'CommentController@new');
Route::post('/comment/root', 'CommentController@all');
Route::post('/comment/{comment}/children', 'CommentController@children');
Route::post('/comment/{comment}/with-children', 'CommentController@withChildren');