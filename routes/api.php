<?php
use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\BaseController;

/*|--------------------------------------------------------------------------| API Routes|--------------------------------------------------------------------------|| Here is where you can register API routes for your application. These| routes are loaded by the RouteServiceProvider and all of them will| be assigned to the "api" middleware group. Make something great!|*/
//Register user
Route::post('register', [RegisterController::class, 'register']);
//Add a new product
Route::middleware('auth:api')  ->post('products', [ProductController::class, 'addProduct']);
//Show all products
Route::middleware('auth:api')  ->get('products', [ProductController::class, 'showAll']);
//Show a product by id
Route::middleware('auth:api')  ->get('products/{id}', [ProductController::class, 'showById']);
//Update product
Route::middleware('auth:api')  ->post('products/{id}', [ProductController::class, 'updateProduct']);
//Delete by id
Route::middleware('auth:api')  ->delete('products/{id}', [ProductController::class, 'deleteById']);
