<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActualityControllers;
use App\Http\Controllers\AdminControlleur;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BlogAdminControlleur;
use App\Http\Controllers\BlogControllers;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContacteController;
use App\Http\Controllers\DeleteControllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginControlleur;
use App\Http\Controllers\MaitsoControlleur;
use App\Http\Controllers\MavoControlleur;
use App\Http\Controllers\MembreControlleur;
use App\Http\Controllers\MenaControlleur;
use App\Http\Controllers\MenafifyControlleur;
use App\Http\Controllers\ProfilControlleur;
use App\Http\Controllers\ProposControlleur;
use App\Http\Controllers\RegisterControllers;
use App\Http\Controllers\SampanaAdminControlleur;
use App\Http\Controllers\SampanaContollers;
use App\Http\Controllers\UserController;

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
//authentificate





require __DIR__.'/auth.php';

/**
 * 
 * mes route
 * 
 * 
 */


Route::get('/', [IndexController::class, 'index'])->name('home');

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

Route::prefix('/administration')->middleware(['auth', 'verified'])->name('Admin.')->group( function () {
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

    //informations
    Route::get('/information', [ProposControlleur::class, 'index'])->name('information');
    Route::get('/information/ajout-d-une-nouvelle-information', [ProposControlleur::class, 'create'])->name('information.create');
    Route::post('/information/ajout-d-une-nouvelle-information', [ProposControlleur::class, 'store'])->name('information.store');
    Route::get('/information/{id}/editer', [ProposControlleur::class, 'modify'])->name('information.modify');
    Route::put('/information/{id}/editer', [ProposControlleur::class, 'update'])->name('information.modify.update');
    
    Route::delete('/information/{id}/suprimer', [ProposControlleur::class, 'delete'])->name('information.delete');

    //Sampana
    Route::get('/sampana', [SampanaAdminControlleur::class, 'index'])->name('sampana');
    Route::get('/sampana/{id}',[SampanaAdminControlleur::class, 'view'])->name('sampana.view');
    //maitso
    Route::get('/sampana/sampana-maitso/{id}/edit', [MaitsoControlleur::class, 'modify'])->name('sampana.maitso.modify');
    Route::put('/sampana/sampana-maitso/{id}/edit', [MaitsoControlleur::class, 'update'])->name('sampana.maitso.update');
    Route::delete('/sampana/2/{id}',[DeleteControllers::class, 'maitso'])->name('sampana.view.delete.maitso');
    //mavo
    Route::get('/sampana/sampana-mavo/{id}/edit', [MavoControlleur::class, 'modify'])->name('sampana.mavo.modify');
    Route::put('/sampana/sampana-mavo/{id}/edit', [MavoControlleur::class, 'update'])->name('sampana.mavo.update');
    Route::delete('/sampana/1/{id}',[DeleteControllers::class, 'mavo'])->name('sampana.view.delete.mavo');
    //mena
    Route::get('/sampana/sampana-mena/{id}/edit', [MenaControlleur::class, 'modify'])->name('sampana.mena.modify');
    Route::put('/sampana/sampana-mena/{id}/edit', [MenaControlleur::class, 'update'])->name('sampana.mena.update');
    Route::delete('/sampana/3/{id}',[DeleteControllers::class, 'mena'])->name('sampana.view.delete.mena');
    //menafify
    Route::get('/sampana/sampana-menafify/{id}/edit', [MenafifyControlleur::class, 'modify'])->name('sampana.menafify.modify');
    Route::put('/sampana/sampana-menafify/{id}/edit', [MenafifyControlleur::class, 'update'])->name('sampana.menafify.update');
    Route::delete('/sampana/4/{id}',[DeleteControllers::class, 'menafify'])->name('sampana.view.delete.menafify');
    //creation
    Route::get('/Blog/creation-d-une-publication', [BlogAdminControlleur::class, 'sampana'])->name('blog.create.create');
    Route::post('/Blog/creation-d-une-publication', [MaitsoControlleur::class, 'store'])->name('maitso.store');

    //route authentificate
    Route::get('/gestion-de-compte', [RegisterControllers::class, 'index'])->name('auth.index');
    Route::delete('/gestion-de-compte/{id}/delete', [RegisterControllers::class, 'delete'])->name('auth.delete');
    Route::get('/gestion-de-compte/creation', [RegisterControllers::class, 'create'])->name('auth.create');
    Route::post('/gestion-de-compte/creation', [RegisterControllers::class, 'store'])->name('auth.store');

    //login out
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    //profil
    Route::get('/Mon-profil',[ProfilControlleur::class, 'index'])->name('profil');
    Route::get('/Mon-profil/{id}/modifier-compte',[ProfilControlleur::class, 'edit'])->name('modify.compte');
    Route::put('/Mon-profil/{id}/modifier-compte',[ProfilControlleur::class, 'update'])->name('modify.update');

    //compte personnel
    Route::get('/parametre-de-compte', [UserController::class, 'index'])->name('user.connected');
    Route::put('/parametre-de-compte', [UserController::class, 'update'])->name('user.connected.update');
});

//route authentification


Route::middleware(['guest'])->group(function () {
    //login
    Route::get('/scout-XeB/connexion',[AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/scout-XeB/connexion',[AuthenticatedSessionController::class, 'store']);
    
    //password forgotten
    Route::get('/scout-XeB/mots-de-passe-oublie', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('/scout-XeB/mots-de-passe-oublie', [PasswordResetLinkController::class, 'store'])->name('password.email');

    //formulaire renitialisation mots de passe
    Route::get('/scout-XeB/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    
    //gerer la soumission
    Route::get('/scout-XeB', [NewPasswordController::class, 'store'])->name('password.update');
});