<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ChargementController;
use App\Http\Controllers\AuthenticationController;

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

// Accueil Route
Route::get('/', [AccueilController::class, 'index'])->name('accueil');
Route::get('/accueil', [AccueilController::class, 'index'])->name('accueil');

// Authentication Route
Route::get('/authentication', [AuthenticationController::class, 'index'])->name('authentication');

// Cartes Routes
Route::get('/cartes/list', [CartesController::class, 'index'])->name('cartes.list');
Route::get('/cartes/{carte_id}', [CartesController::class, 'show'])->name('cartes.show');

// Chargement Route
Route::get('/', [ChargementController::class, 'index'])->name('chargement');
Route::get('/chargement', [ChargementController::class, 'index'])->name('chargement');

// Client Route
Route::get('/client/{id}', [ClientController::class, 'show'])->name('clients.show');

// Contact Route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Profil Route
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');

// Orders Routes
Route::get('/orders/list', [OrdersController::class, 'index'])->name('orders.list');
Route::get('/orders/{order_id}', [OrdersController::class, 'show'])->name('orders.show');
