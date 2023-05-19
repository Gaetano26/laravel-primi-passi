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
    $titolo = 'Lista Scuola';
    return view('home');
})->name('home' , $titolo);

Route::get('/laravel/resources/views/studenti.blade.php', function () {
    $data = [
        'titolo' => 'Lista Studenti',
         'studenti' => [
            'Filippo Giampapa',
            'Filippo Verrone',
            'Giuseppe Indomenico',
            'Gaetano Spampinato',
            'Vito De Palma',
            'Chiara Sucato',
         ]

         ];
    return view('studenti' , $data);
})->name('studenti');

Route::get('/laravel/resources/views/professori.blade.php', function () {
    $data = [
        'titolo' => 'Lista Professori',
         'professori' => [
            'Clelia Fradella',
            'Marco Acciari',
            'Samuel Panicucci',
         ]

         ];
    return view('professori', $data);
})->name('professori');
