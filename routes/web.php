<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\KeyController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/admin', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('admin');

        Route::prefix('unit')->group(function () {
            Route::get('/create', [UnitController::class, 'create'])->name('unit.create');
            Route::post('/store', [UnitController::class, 'store'])->name('unit.store');
            Route::get('/edit', [UnitController::class, 'edit'])->name('unit.edit');
            Route::post('/update', [UnitController::class, 'update'])->name('unit.update');
            Route::post('/delete', [UnitController::class, 'delete'])->name('unit.delete');
        });

        Route::prefix('content')->group(function () {
            Route::get('/create/{unit}', [ContentController::class, 'create'])->name('content.create');
            Route::post('/store', [ContentController::class, 'store'])->name('content.store');
            Route::get('/edit', [ContentController::class, 'edit'])->name('content.edit');
            Route::post('/update', [ContentController::class, 'update'])->name('content.update');
            Route::post('/delete', [ContentController::class, 'delete'])->name('content.delete');
        });

    });

    Route::group(['middleware' => ['role:teacher']], function () {
        Route::get('/teacher', [App\Http\Controllers\HomeController::class, 'teacherDashboard'])->name('teacher');
    });

    Route::group(['middleware' => ['role:admin|teacher|student']], function () {
        //units routes
        Route::prefix('unit')->group(function () {
            Route::get('/', [UnitController::class, 'index'])->name('unit.index');
            Route::get('/show/{unit}', [UnitController::class, 'show'])->name('unit.show');
        });
        Route::prefix('content')->group(function () {
            Route::get('/show/{id}', [ContentController::class, 'show'])->name('content.show');
        });

        Route::prefix('resource')->group(function () {
            Route::get('/download/{url}', [ResourceController::class, 'download'])->name('resource.download');
            Route::get('/index/{title?}/{category?}', [ResourceController::class, 'index'])->name('resource.index');
        });

    });

    Route::group(['middleware' => ['role:admin|teacher']], function () {
        //keys routes
        Route::prefix('key')->group(function () {
            Route::get('/', [KeyController::class, 'index'])->name('key.index');
            Route::get('/create', [KeyController::class, 'create'])->name('key.create');
            Route::post('/store', [KeyController::class, 'store'])->name('key.store');
        });
        Route::prefix('user')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('user.index');
        });

        Route::prefix('resource')->group(function () {
            Route::get('/create/{content_id}', [ResourceController::class, 'create'])->name('resource.create');
            Route::post('/store', [ResourceController::class, 'store'])->name('resource.store');
            Route::post('/destroy', [ResourceController::class, 'destroy'])->name('resource.destroy');
        });
    });
});

