<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Parameters\ChapterAffiliateController;
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
    return redirect(\route('dashboard'));
});

Route::middleware('auth')->group(function () {

    Route::group(['middleware' => ['get.menu']], function () {

        Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

        Route::resource('chapter_affiliates', \App\Http\Controllers\Parameters\ChapterAffiliateController::class);

        require __DIR__.'/user.php';
        require __DIR__.'/resource.php';
        require __DIR__.'/admin.php';
    });
});

Route::group(['middleware' => ['get.menu']], function () {
    Auth::routes();
});
