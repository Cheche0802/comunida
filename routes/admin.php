<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('category', CategoryController::class)->names('admin.categories');

Route::resource('tag', TagController::class)->names('admin.tags');

Route::resource('post', PostController::class)->names('admin.posts');
