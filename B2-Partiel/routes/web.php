<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsSectionController;
use App\Http\Controllers\SupporterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class, 'home'])->name('home');

// Supporters
Route::post('/', [SupporterController::class, 'store'])->name('supporter.store');

Route::get('/programme', [Controller::class, 'programme'])->name('programme');
Route::get('/actions', [Controller::class, 'actions'])->name('actions');

// Login
Route::get('/login', [LoginController::class, 'login'])->name('auth.login');
Route::post('/login', [LoginController::class, 'authentication'])->name('auth.authentication');
Route::get('/register', [LoginController::class, 'register'])->name('auth.register');
Route::post('/register', [LoginController::class, 'registration'])->name('auth.registration');
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

// Actualités
Route::get('/actualites', [NewsController::class, 'index'])->name('news.index');
Route::get('/actualites/create', [NewsController::class, 'create'])->name('news.create')->middleware('auth');
Route::post('/actualites/create', [NewsController::class, 'store'])->name('news.store')->middleware('auth');
Route::get('/actualites/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/actualites/{news}/edit', [NewsController::class, 'edit'])->name('news.edit')->middleware('auth');
Route::put('/actualites/{news}/edit', [NewsController::class, 'update'])->name('news.update')->middleware('auth');
Route::delete('/actualites/{news}', [NewsController::class, 'destroy'])->name('news.destroy')->middleware('auth');

// Section d'une actualité
Route::get('/actualites/{news}/section/create', [NewsSectionController::class, 'create'])->name('section.create')->middleware('auth');
Route::post('/actualites/{news}/section/create', [NewsSectionController::class, 'store'])->name('section.store')->middleware('auth');
Route::get('/section/{section}/edit', [NewsSectionController::class, 'edit'])->name('section.edit')->middleware('auth');
Route::put('/section/{section}/edit', [NewsSectionController::class, 'update'])->name('section.update')->middleware('auth');
Route::delete('/section/{section}', [NewsSectionController::class, 'destroy'])->name('section.destroy')->middleware('auth');

// Mentions
Route::get('/mentions-legales', [NewsController::class, 'mentionsLegales'])->name('mentionsLegales');
Route::get('/politique-confidentialite', [NewsController::class, 'politiqueConfidentialite'])->name('politiqueConfidentialite');
Route::get('/donnees-personnelles', [NewsController::class, 'donneesPersonnelles'])->name('donneesPersonnelles');
