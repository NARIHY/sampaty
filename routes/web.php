<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActualityControllers;
use App\Http\Controllers\AdminControlleur;
use App\Http\Controllers\BlogAdminControlleur;
use App\Http\Controllers\BlogControllers;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContacteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembreControlleur;
use App\Http\Controllers\SampanaContollers;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/**
 * 
 * 
 * 
 * 
 */




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

//administration

Route::prefix('/administration')->name('Admin.')->group( function () {
    Route::get('/', [AdminControlleur::class, 'index'])->name('home');

    //route ny membre
    Route::get('/Membre', [AdminControlleur::class, 'membre'])->name('membre');
    Route::get('/Membre/Ajouter-un-membre', [MembreControlleur::class, 'index'])->name('ajouterMembre');
    Route::post('/Membre/Ajouter-un-membre', [MembreControlleur::class, 'create'])->name('validation');
    Route::get('/{id}/{nom}/edit', [MembreControlleur::class, 'modify'])->name('message.modify');
    Route::put('/{id}/{nom}/edit', [MembreControlleur::class, 'update'])->name('message.update');

    //route message
    Route::get('/Message-recu', [AdminControlleur::class, 'message'])->name('message');


    //route actualiter
    Route::get('/Actualite', [ActualityControllers::class, 'admin'])->name('actualite');
    Route::get('/Actualite/ajouter-une-nouvelle-actualite', [ActualityControllers::class, 'create'])->name('actualite.create');
    Route::get('/Actualite/{id}/modifier', [ActualityControllers::class, 'modify'])->name('actualite.modify');
    Route::put('/Actualite/{id}/modifier', [ActualityControllers::class, 'update'])->name('actualite.modify.update');
    Route::post('/Actualite/ajouter-une-nouvelle-actualite', [ActualityControllers::class, 'store'])->name('actualite.create.store');
    
    Route::delete('/Actualite/{id}/delete', [ActualityControllers::class, 'delete'])->name('actualite.delete');

    //route pour les blog
    Route::get('/Blog', [BlogAdminControlleur::class, 'index'])->name('blog');
    Route::get('/Blog/creation-d-un-blog', [BlogAdminControlleur::class, 'create'])->name('blog.create');
    Route::post('/Blog/creation-d-un-blog', [BlogAdminControlleur::class, 'store'])->name('blog.store');
    Route::get('/Blog/{id}/modifier', [BlogAdminControlleur::class, 'modify'])->name('blog.modify');
    Route::put('/Blog/{id}/modifier', [BlogAdminControlleur::class, 'update'])->name('blog.modify.update');

    Route::delete('/Blog/{id}/delete', [BlogAdminControlleur::class, 'delete'])->name('blog.delete');

});
