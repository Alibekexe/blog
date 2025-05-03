<?php

use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\CreateController;
use App\Http\Controllers\Admin\Category\DeleteController;
use App\Http\Controllers\Admin\Category\EditController;
use App\Http\Controllers\Admin\Category\ShowController;
use App\Http\Controllers\Admin\Category\StoreController;
use App\Http\Controllers\Admin\Category\UpdateController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\User\UserCreateController;
use App\Http\Controllers\Admin\User\UserDeleteController;
use App\Http\Controllers\Admin\User\UserEditController;
use App\Http\Controllers\Admin\User\UserShowController;
use App\Http\Controllers\Admin\User\UserStoreController;
use App\Http\Controllers\Admin\User\UserUpdateController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Post\PostCreateController;
use App\Http\Controllers\Admin\Post\PostDeleteController;
use App\Http\Controllers\Admin\Post\PostEditController;
use App\Http\Controllers\Admin\Post\PostShowController;
use App\Http\Controllers\Admin\Post\PostStoreController;
use App\Http\Controllers\Admin\Post\PostUpdateController;
use App\Http\Controllers\Admin\Tag\TagController;
use App\Http\Controllers\Admin\Tag\TagCreateController;
use App\Http\Controllers\Admin\Tag\TagDeleteController;
use App\Http\Controllers\Admin\Tag\TagEditController;
use App\Http\Controllers\Admin\Tag\TagShowController;
use App\Http\Controllers\Admin\Tag\TagStoreController;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Tag\TagUpdateController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [IndexController::class , '__invoke']);
});


Route::group(['namespace' => 'Admin' , 'prefix' => 'admin' , 'middleware' => [ 'auth', 'admin' , 'verified ']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [AdminController::class , '__invoke']);
    });
    Route::group(['namespace' => 'Post' , 'prefix' => 'posts'], function () {
        Route::get('/', [PostController::class , '__invoke'])->name('admin.post');
        Route::get('/create', [PostCreateController::class , '__invoke'])->name('admin.post.create');
        Route::post('/', [PostStoreController::class , '__invoke'])->name('admin.post.store');
        Route::get('/{post}', [PostShowController::class , '__invoke'])->name('admin.post.show');
        Route::get('/{post}/edit', [PostEditController::class , '__invoke'])->name('admin.post.edit');
        Route::patch('/{post}', [PostUpdateController::class , '__invoke'])->name('admin.post.update');
        Route::delete('/{post}', [PostDeleteController::class , '__invoke'])->name('admin.post.delete');

    });
    Route::group(['namespace' => 'Category' , 'prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class , '__invoke'])->name('admin.categories');
        Route::get('/create', [CreateController::class , '__invoke'])->name('admin.categories.create');
        Route::post('/', [StoreController::class , '__invoke'])->name('admin.categories.store');
        Route::get('/{category}', [ShowController::class , '__invoke'])->name('admin.categories.show');
        Route::get('/{category}/edit', [EditController::class , '__invoke'])->name('admin.categories.edit');
        Route::patch('/{category}', [UpdateController::class , '__invoke'])->name('admin.categories.update');
        Route::delete('/{category}', [DeleteController::class , '__invoke'])->name('admin.categories.delete');

    });
    Route::group(['namespace' => 'tag' , 'prefix' => 'Tags'], function () {
        Route::get('/', [TagController::class , '__invoke'])->name('admin.tag');
        Route::get('/create', [TagCreateController::class , '__invoke'])->name('admin.tag.create');
        Route::post('/', [TagStoreController::class , '__invoke'])->name('admin.tag.store');
        Route::get('/{tag}', [TagShowController::class , '__invoke'])->name('admin.tag.show');
        Route::get('/{tag}/edit', [TagEditController::class , '__invoke'])->name('admin.tag.edit');
        Route::patch('/{tag}', [TagUpdateController::class , '__invoke'])->name('admin.tag.update');
        Route::delete('/{tag}', [TagDeleteController::class , '__invoke'])->name('admin.tag.delete');

    });
    Route::group(['namespace' => 'User' , 'prefix' => 'users'], function () {
        Route::get('/', [UserController::class , '__invoke'])->name('admin.user');
        Route::get('/create', [UserCreateController::class , '__invoke'])->name('admin.user.create');
        Route::post('/', [UserStoreController::class , '__invoke'])->name('admin.user.store');
        Route::get('/{user}', [UserShowController::class , '__invoke'])->name('admin.user.show');
        Route::get('/{user}/edit', [UserEditController::class , '__invoke'])->name('admin.user.edit');
        Route::patch('/{user}', [UserUpdateController::class , '__invoke'])->name('admin.user.update');
        Route::delete('/{user}', [UserDeleteController::class , '__invoke'])->name('admin.user.delete');

    });
});

Auth::routes(['verify'=>true]);

