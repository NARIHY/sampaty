<?php

use App\Http\Controllers\BlogControllers;
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
    return view('scout.index');
})->name('home');

Route::prefix('/blog')->name('Blog.')->group( function () {
    Route::get('/', [BlogControllers::class, 'index'])->name('index');
    Route::get('/show/{slug}-{id}', [BlogControllers::class, 'show'])->name('show')->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ]);
    Route::get('/actualite', [BlogControllers::class, 'actualite'])->name('actualite');
    Route::get('/sampana', [BlogControllers::class, 'sampana'])->name('sampana');
    Route::get('/propos', [BlogControllers::class, 'propos'])->name('propos');
});
