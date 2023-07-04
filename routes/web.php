<?php

use App\Http\Controllers\ActualityControllers;
use App\Http\Controllers\BlogControllers;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContacteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SampanaContollers;
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

Route::post('/', [ContacteController::class, 'contacte'])->name('home.contact');

Route::prefix('/blog')->name('Blog.')->group( function () {
    Route::get('/', [BlogControllers::class, 'index'])->name('index');
    Route::get('/show/{slug}-{id}', [BlogControllers::class, 'show'])->name('show')->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ]);
    Route::get('/actualite', [BlogControllers::class, 'actualite'])->name('actualite');
    Route::get('/actualite/{title}-{id}', [ActualityControllers::class, 'show'])->name('actuShow')->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ]);
    
    Route::get('/propos', [BlogControllers::class, 'propos'])->name('propos');
});

Route::prefix('/sampana')->name('Sampana.')->group( function() {
    Route::get('/', [SampanaContollers::class, 'index'])->name('index');

    Route::get('/Sampana-mavo', [SampanaContollers::class, 'mavo'])->name('mavo');

    Route::get('/Sampana-maitso', [SampanaContollers::class, 'maitso'])->name('maitso');

    Route::get('/Sampana-mena', [SampanaContollers::class, 'mena'])->name('mena');

    Route::get('/Sampana-menafify', [SampanaContollers::class, 'menafify'])->name('menafify');
}) ;
