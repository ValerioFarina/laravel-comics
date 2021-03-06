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
    $comics = config('comics');
    $data = [
        'comic_series' => $comics
    ];
    return view('home', $data);
})->name('homepage');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    if (array_key_exists($id, $comics)) {
        $single_comics = $comics[$id];
        $data = [
            'single_comics' => $single_comics
        ];
        return view('comics-details', $data);
    }
    abort('404');
})->name('comics-details');
