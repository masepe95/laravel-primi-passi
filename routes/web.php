<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $last_name = 'Sepe';
    $class_number = '100';
    return view('home', compact('last_name', 'class_number'));
})->name('home');

Route::get('/teachers', function () {
    $teachers = [
        ['name' => 'Marco', 'surname' => 'Lanci'],
        ['name' => 'Marco', 'surname' => 'Baroncini'],
        ['name' => 'Marius', 'surname' => 'Mina'],
    ];
    return view('teachers', compact('teachers'));
})->name('teachers');
