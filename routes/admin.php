<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;


use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('category', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('tag', TagController::class)->except('show')->names('admin.tags');

Route::resource('post', PostController::class)->except('show')->names('admin.posts');

Route::resource('message', MessageController::class)->except('show')->names('admin.messages');
