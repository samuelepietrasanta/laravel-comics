<?php

use Illuminate\Support\Facades\Route;

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
    return view('homepage');
}) -> name ("home") ;

Route::get('/characters', function () {
    return view('characters');
})-> name ("characters") ;


Route::get('/comics', function () {
    $fumetti = config('comics');
    return view('comics' , ['fumetti' => $fumetti]);
})-> name ("comics") ;


Route::get('/games', function () {
    $giochi = config('games');
    return view('games' , ['giochi' => $giochi]);
})-> name ("games") ;

Route::get('/game/{id}' , function($id) {
    $giochi = config('games');
    return view('game', ['games' => $giochi[$id]]);

}) -> name ("game");

Route::get('/movies', function () {
    return view('movies');
})-> name ("movies");

Route::get('/comic/{id}', function ($id) {
    $comics = config('comics');
    return view('comic', ['comics' => $comics[$id]]);
})-> name ("comic") ;
