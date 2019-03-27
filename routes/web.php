<?php

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

// Route::get('/hello-html', function () {
//     return "<h1>Hello World</h1>";
// });

// Route::get('/hello', function () {
//     return "Hello World";
// });

// Route::get('/services', function () {
//     return view('pages.services');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/users/{id}/{name}', function ($id, $name) {
    return "This is the user " . $name . " with an id of " . $id;
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', "PagesController@index");
Route::get('/welcome', "PagesController@welcome");
Route::get('/about', "PagesController@about");
Route::get('/services', "PagesController@services");