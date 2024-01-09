<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\AssetController;

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

Route::get('/home', function () {
    return Inertia::render('Home');
})->middleware('auth')->name('home');

Route::get('/assets', [ AssetController::class, 'index' ])->middleware('auth')->name('assets');
Route::post('/assets/input_details', [ AssetController::class, 'create' ])->middleware('auth')->name('assets.input_details');
Route::post('/assets/store', [ AssetController::class, 'store' ])->middleware('auth')->name('assets.store');
Route::get('/assets/{id}', [ AssetController::class, 'show' ])->middleware('auth')->name('assets.show');

Route::get('/approvals', [ AssetController::class, 'index' ])->middleware('auth')->name('approvals');

require __DIR__.'/auth.php';
