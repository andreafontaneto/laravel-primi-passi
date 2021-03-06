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

    $data = [
        'saluto' => 'Ciao',
        'name' => 'Andrea'
    ];

    return view('home', $data);
})->name('home');

Route::get('/chi-siamo', function () {
    return view('about');
})->name('about');

Route::get('/contatti', function () {

    $data = [
        'contacts' => [
            "Marco Rossi",
            "Mario Bianchi",
            "Giuseppe Verdi"
        ],
        'print' => true
    ];

    return view('contacts', $data);
})->name('contacts');
