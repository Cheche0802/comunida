<?php

use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\PhotoAlbumController;
use App\Http\Controllers\Admin\PreachController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('category', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('tag', TagController::class)->except('show')->names('admin.tags');

Route::resource('post', PostController::class)->except('show')->names('admin.posts');

Route::resource('message', MessageController::class)->names('admin.messages');

Route::resource('calendar', CalendarController::class)->names('admin.calendar');

Route::resource('album', AlbumController::class)->names('admin.album');

//Route::post('album/{img}/photos', [PhotoAlbumController::class, 'store'])->names('admin.album.photo.store');

//Route::delete('album/{img}', [PhotoAlbumController::class, 'destroy'])->names('admin.album.photo.destroy');

Route::resource('preachs', PreachController::class)->names('admin.preachs');
