<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Services\Localization\LocalizationService;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LocalizationService::locale(),
        'middleware' => 'setLocale'
    ],
function (){
    Route::group(['prefix'=>'user' ], function (){
        Route::get('/', [HomeController::class, 'index'])->name('user.index');
        Route::get('/{service}/show', [HomeController::class, 'show'])->name('user.show');

    });

});

