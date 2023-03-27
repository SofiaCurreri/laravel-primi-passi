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
    $name= "Sofia";
    $tasks = [
       "Prenotare ristorante per giovedì",
       "Tagliare l' erba",
       "Comprare marmellata di pesche",
       "Fare allenamento",
       "Ordinare la libreria nuova"
    ];
    return view('home', compact("name", "tasks"));
});