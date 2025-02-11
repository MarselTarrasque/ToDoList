<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'showHomePage'])->name('view.homepage');
Route::get('/profile', [PageController::class, 'showProfilePage'])->name('view.profile');
