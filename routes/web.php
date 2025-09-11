<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\BlogPostController as AdminBlogPostController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public routes

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/education', [PortfolioController::class, 'education'])->name('education');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Laravel Breeze default dashboard route
Route::get('/dashboard', function () {
    if (auth()->check() && auth()->user()->usertype === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes (Laravel Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes with middleware
Route::middleware(['auth', 'verified', AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/project/create', [AdminProjectController::class, 'create'])->name('admin.project.create');
    Route::post('/admin/project/store', [AdminProjectController::class, 'store'])->name('admin.project.store');
    Route::get('/admin/blog/create', [AdminBlogPostController::class, 'create'])->name('admin.blog.create');
    Route::post('/admin/blog/store', [AdminBlogPostController::class, 'store'])->name('admin.blog.store');
});

require __DIR__.'/auth.php';