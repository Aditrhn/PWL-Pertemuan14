<?php
use App\Book;
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

Route::get('/', 'BookController@show');

Route::get('/add', function () {
    return view('add');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/buku', function () {
    //Book::get(); == select * from books
    return Book::get();
});
