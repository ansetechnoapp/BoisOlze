<?php

use Faker\Guesser\Name;
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
    return view('index');
})->name('home'); 
Route::get('/brennstoffe', function () {
    return view('kategorie.brennstoffe.index');
})->name('carburant');
Route::get('/brennholz', function () {
    return view('kategorie.brennstoffe.brennholz.index');
})->name('boisDeChauffage'); 
Route::get('/holzbriketts', function () {
    return view('kategorie.brennstoffe.holzbriketts.index');
})->name('briquettesDeBois'); 
Route::get('/holzpellets', function () {
    return view('kategorie.brennstoffe.holzpellets.index');
})->name('boulettesDeBois'); 
Route::get('/kaminbriketts', function () {
    return view('kategorie.brennstoffe.kaminbriketts.index');
})->name('BriquesDeChemine');
Route::get('/ref={name}', function ($name) {
    return view('ref.'.$name.'.index');
}); 
Route::get('/warenkorb', function () {
    return view('warenkorb.index');
});
Route::get('/zurkasse', function () {
    return view('zurkasse.index');
});



