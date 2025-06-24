<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\BookList;
use App\Livewire\CreateBook;
use App\Livewire\UpdateBook;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/book',  BookList::class)->name('book.list');
    Route::get('/book/create',  CreateBook::class)->name('book.create');
    Route::get('/book/update{book}', UpdateBook::class)->name('book.update');
});

