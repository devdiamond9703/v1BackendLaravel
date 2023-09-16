<?php

use App\Http\Controllers\AttributeController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('attributes', [AttributeController::class, 'index']);
Route::post('attributes', [AttributeController::class, 'store']);
Route::get('attributes/value/{id}', [AttributeController::class, 'valuesByAttr']);
Route::post('attributes/value', [AttributeController::class, 'storeValueByAttr']);
// Route::get('attributes/show/{id}', [AttributeController::class, 'show']);
// Route::put('attributes/edit/{id}', [AttributeController::class, 'update']);
// Route::delete('attributes/delete/{id}', [AttributeController::class, 'delete']);
