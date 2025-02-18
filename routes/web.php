<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Middleware\AutorizacaoMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name("index");

// Rotas para autenticação
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotas para registro
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Rotas para recuperação de senha
Route::get('password/reset', [PasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [PasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [PasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [PasswordController::class, 'reset']);

// Rotas do App Estoque - Produtos
Route::middleware(AutorizacaoMiddleware::class)->group(function () {
    Route::get('/produtos',  [ProdutoController::class, 'lista'])->name('produtos.lista');
    Route::get('/produtos/mostra/{id}', [ProdutoController::class,'mostra'])
        ->where('id','[0-9]+')->name('produtos.mostra');
    Route::get('/produtos/novo', [ProdutoController::class,'novo'])->name('produtos.novo');
    Route::match(array('GET', 'POST'), '/produtos/adiciona', [ProdutoController::class,'adiciona']);  
    Route::get('/produtos/json', [ProdutoController::class,'listaJson']);  
    Route::get('/produtos/remove/{id}', [ProdutoController::class, 'remove'])
        ->where('id','[0-9]+')->name('produtos.remove');
    Route::get('/produtos/altera/{id}', [ProdutoController::class, 'altera'])
        ->where('id','[0-9]+')->name('produtos.altera');
    Route::match(array('GET','PUT'),'/produtos/atualiza/{id}', [ProdutoController::class, 'atualiza'])
        ->where('id','[0-9]+')->name('produtos.atualiza');
});