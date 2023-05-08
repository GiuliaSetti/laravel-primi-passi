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

    //hello world
    $hello = 'Hello';
    $world = 'World!';

    //links per la navbar
    $links = [
        'home',
        'about us',
        'contacts',
    ];

    return view('home', compact('hello', 'world', 'links'));
})->name('home');

// about us 
Route::get('/about', function () {

    //titolo pagina
    $title = 'About Us';

    //links per la navbar
    $links = [
        'home',
        'about us',
        'contacts',
    ];

    return view('about', compact('title', 'links'));
})->name('about us');

//contacts
Route::get('/contacts', function () {

    //titolo pagina
    $title = 'Contacts';

    //links per la navbar
    $links = [
        'home',
        'about us',
        'contacts',
    ];

    return view('contacts', compact('title', 'links'));
})->name('contacts');
