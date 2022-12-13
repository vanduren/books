<?php

use App\Http\Controllers\AuthorController;
use App\Models\Author;
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
    return view('welcome');
});


Route::resource('authors', AuthorController::class);

Route::post('add-book/{author}', [AuthorController::class, 'addBook'])->name('add-book');
Route::post('remove-book/{author}', [AuthorController::class, 'removeBook'])->name('remove-book');
