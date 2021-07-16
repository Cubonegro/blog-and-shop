<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
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

/* Products */
Route::get('/products', [ProductController::class, "get"]);
Route::post('/products', [ProductController::class, "add"]);
Route::put('/products/{id}', [ProductController::class, "update"]);
Route::delete('/products/{id}', [ProductController::class, "delete"]);

/* Gallery */
