<?php

use App\Http\Controllers\AuthorController;
use App\Models\Order;
use App\Models\tree;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/orders/{order}', function(Order $order){
    return $order-> load('client', 'book_authors');
});


Route::resource('authors', AuthorController::class);



Route::get('/authors/{author}', function(Author $author){
    return $author-> load('client', 'book_authors');
});