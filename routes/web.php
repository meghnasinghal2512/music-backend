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

Route::get('/', function () {
    return view('welcome');
});



Route::post('api/genre/add', 'MusicController@addGenres');
Route::get('api/genres', 'MusicController@showGenres');
Route::put('api/genres/edit', 'MusicController@editGenres');
Route::post('api/genres/delete', 'MusicController@deleteGenres');

//Traks Apis
Route::post('api/track/add', 'MusicController@addTrack');
Route::get('api/tracks', 'MusicController@showTracks');
Route::put('api/tracks/edit', 'MusicController@editTracks');
Route::post('api/track/delete', 'MusicController@deleteTrack');

