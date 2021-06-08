<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Create
Route::get('/posts/create', [PostsController::class,'create']);
Route::post('/posts', [PostsController::class,'store']);
// Read
Route::get('/posts', [PostsController::class,'index']);

// Update 
Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);
Route::put('/posts/{post}', [PostsController::class, 'update']);

//Delete
Route::delete('posts/{post}', [PostsController::class, 'delete']);

