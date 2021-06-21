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
    $comicsData = config("comics");
    
    $viewData = [
        "comicsList" => $comicsData
    ];

    return view('myLandingPage', $viewData);
})->name("home");


Route::get('/comic/{index}', function ($index) {
    $comicsData = config("comics");

    if(!is_numeric($index) || $index < 0 || $index > count($comicsData) -1) {
        abort(404, "Fumetto inesistente o non ancora disponibile");
    }

    $selectedComic = $comicsData[intval($index)];

    return view('specificComicPage', [
        "comic" => $selectedComic
    ]);
})->name("specific-comic-page");

