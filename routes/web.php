<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');
Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');
Route::get('notifications', [NotificationController::class, 'index'])->name('notifications.index');
Route::patch('notificaciones/{id}', [NotificationController::class, 'read'])->name('notifications.read');
Route::delete('notificaciones/{id}', [NotificationController::class, 'destroy'])->name('notifications.destroy');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

