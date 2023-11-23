<?php

use App\Http\Controllers\Admin\Category\ShowController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\Subcategory\CategoryController;
use App\Http\Controllers\Admin\Subcategory\SubcategoryController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['prefix' => ''], function () {
    Route::get('/', [IndexController::class, 'index']);

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::delete('/{category}/delete', [CategoryController::class, 'delete'])->name('admin.category.delete');

        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/{category}', [CategoryController::class, 'update'])->name('admin.category.update');

        Route::get('/{category}', [CategoryController::class, 'show'])->name('admin.category.show') ;
    });


    Route::group(['prefix' => 'subcategory'], function () {
        Route::get('/', [SubcategoryController::class, 'index'])->name('admin.subcategory.index');
        Route::get('/create', [SubcategoryController::class, 'create'])->name('admin.subcategory.create');
        Route::post('/', [SubcategoryController::class, 'store'])->name('admin.subcategory.store');
        Route::delete('/{subcategory}/delete', [SubcategoryController::class, 'delete'])->name('admin.subcategory.delete');

        Route::get('/{subcategory}/edit', [SubcategoryController::class, 'edit'])->name('admin.subcategory.edit');
        Route::patch('/{subcategory}', [SubcategoryController::class, 'update'])->name('admin.subcategory.update');

        Route::get('/{subcategory}', [SubcategoryController::class, 'show'])->name('admin.subcategory.show') ;

        Route::post('/' , [SubcategoryController::class , 'index'])-> name('admin.subcategory.index ');
    });
});

