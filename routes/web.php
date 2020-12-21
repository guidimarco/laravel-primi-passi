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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $data = [
        "user_name" => "Mario",
        "user_surname" => "Rossi",
    ];
    return view('home', $data);
});

Route::get('/about-us', function () {
    return view('about');
}) -> name("aboutUs");

Route::get('/news', function () {
    return view('news');
}) -> name("news");

Route::get('/our-blog', function () {
    return view('blog');
}) -> name("blog");
