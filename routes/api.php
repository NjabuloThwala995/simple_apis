<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MathController;

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

Route::post('v1/math/sum', [MathController::class, 'sum']);
Route::post('v1/math/difference', [MathController::class, 'difference']);
Route::post('v1/math/product', [MathController::class, 'product'])->name('math.product');
Route::post('v1/math/quotient', [MathController::class, 'quotient']);
Route::get('apis/math', [MathController::class, 'index']);