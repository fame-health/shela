<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Home routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// AJAX routes for dynamic content
Route::get('/posts/category', [HomeController::class, 'getPostsByCategory'])->name('posts.by-category');
Route::get('/posts/search', [HomeController::class, 'searchPosts'])->name('posts.search');
Route::get('/galleries/more', [HomeController::class, 'getMoreGalleries'])->name('galleries.more');
Route::post('/posts/increment-views', [HomeController::class, 'incrementPostViews'])->name('posts.increment-views');

// Additional routes that you might need for a complete website
Route::prefix('blog')->group(function () {
    Route::get('/', [HomeController::class, 'blog'])->name('blog.index');
    Route::get('/category/{category:slug}', [HomeController::class, 'blogByCategory'])->name('blog.category');
    Route::get('/{post:slug}', [HomeController::class, 'blogDetail'])->name('blog.show');
});

Route::prefix('services')->group(function () {
    Route::get('/', [HomeController::class, 'services'])->name('services.index');
    Route::get('/{service:slug}', [HomeController::class, 'serviceDetail'])->name('services.show');
});

Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery.index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactStore'])->name('contact.store');

// Dynamic pages
Route::get('/{page:slug}', [HomeController::class, 'page'])->name('page.show');
