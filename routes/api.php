<?php

use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/show-tags', [TagController::class, 'index'])->name('show-tags');
Route::post('/new-tag', [TagController::class, 'store'])->name('add-tag');
Route::put('/tag/{id}', [TagController::class, 'update'])->name('update-tag');
