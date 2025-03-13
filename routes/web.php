<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){

    Route::get('/posts/{post}/comments/{comment}', function($post, $comment){
        return "PostId. $post .CommentId . $comment";
    });
})->middleware('checkAge');

// Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::resource('/users', UserController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);
Route::resource('/orders', OrderController::class);
Route::resource('/orderItems', OrderItemController::class);

Route::get('/child', function(){
    return view('child');
});
