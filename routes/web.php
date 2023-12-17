<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return inertia::render('App', [
        'title' => 'Home',
        'description' => 'Blog Interia App',
        'articles' => [
            [
                'id' => 1,
                'title' => 'Article 1',
                'content' => 'Content 1'
            ],
            [
                'id' => 2,
                'title' => 'Article 2',
                'content' => 'Content 2'
            ]
        ]
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

//Panel admin
Route::resource('/admin/posts', PostController::class);
