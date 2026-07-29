<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/servicios', [FrontController::class, 'services'])->name('services.index');
Route::get('/proyectos', [FrontController::class, 'projects'])->name('projects.index');
Route::get('/proyectos/{project:slug}', [FrontController::class, 'project'])->name('project.show');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog.index');
Route::get('/blog/{post:slug}', [FrontController::class, 'post'])->name('blog.show');
Route::get('/blog/categoria/{category:slug}', [FrontController::class, 'blogByCategory'])->name('blog.category');

Route::get('/contacto', [FrontController::class, 'contact'])->name('contact');
Route::post('/contacto', [FrontController::class, 'sendContact'])->middleware('throttle:contact');

Route::get('/terminos', [FrontController::class, 'terms'])->name('terms');
Route::get('/privacidad', [FrontController::class, 'privacy'])->name('privacy');

Route::get('/api/blog/{post:slug}/{type}', App\Http\Controllers\SummaryController::class)
    ->whereIn('type', ['summary', 'highlights'])
    ->middleware('throttle:10,1')
    ->name('blog.summary');

Route::get('/buscar', [FrontController::class, 'search'])->name('search');
Route::get('/health', App\Http\Controllers\HealthController::class)->name('health');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->middleware('throttle:register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/mi-cuenta', [AuthController::class, 'clientDashboard'])->name('client.dashboard');
});
