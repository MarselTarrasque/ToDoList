<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'showHomePage'])->name('view.home');
Route::get('/project', [PageController::class, 'showProjectPage'])->name('view.project');
Route::get('/profile', [PageController::class, 'showProfilePage'])->name('view.profile');
