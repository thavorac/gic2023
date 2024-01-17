<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use \App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// -- Authentication

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// -- Category api urls
Route::get('/categories', [CategoryController::class, 'getCategories']);
Route::post('/categories', [CategoryController::class, 'createCategory']);
Route::get('/categories/{categoryId}', [CategoryController::class, 'getCategory']);
Route::patch('/categories/{categoryId}', [CategoryController::class, 'updateCategory']);
Route::delete('/categories/{categoryId}', [CategoryController::class, 'deleteCategory']);
Route::get('/categories/{categoryId}/products', [CategoryController::class, 'getProductsOfCategory']);

// -- Product api urls
Route::get('/products', [ProductController::class, 'getProducts']);
Route::post('/products', [ProductController::class, 'createProduct']);
Route::get('/products/{productId}', [ProductController::class, 'getProduct']);
Route::patch('/products/{productId}', [ProductController::class, 'updateProduct']);
Route::delete('/products/{productId}', [ProductController::class, 'deleteProduct']);

