<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductCategoryController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('attributes', [AttributeController::class, 'index']);
Route::post('attributes', [AttributeController::class, 'store']);
Route::get('attributes/value/{id}', [AttributeController::class, 'valuesByAttr']);
Route::post('attributes/value', [AttributeController::class, 'storeValueByAttr']);

Route::get('categories', [ProductCategoryController::class, 'index']);
Route::post('categories', [ProductCategoryController::class, 'store']);
Route::get('categories/attr/{id}', [ProductCategoryController::class, 'attrByCategory']);
Route::post('categories/attr', [ProductCategoryController::class, 'storeAttrByCategory']);

Route::get('products', [ProductController::class, 'index']);
Route::post('products', [ProductController::class, 'store']);
Route::get('products/variants/{id}', [ProductController::class, 'variantsByProduct']);

Route::post('login', [AuthController::class, 'login']);
