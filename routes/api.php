<?php

use App\Http\Controllers\SaleController;
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

Route::post('sales/create',[SaleController::class, 'create']);
Route::get('sales/list',[SaleController::class, 'list']);
Route::get('sales/show/{sale}',[SaleController::class, 'show']);
Route::delete('sales/{sale}',[SaleController::class, 'delete']);
Route::put('sales/{sale}',[SaleController::class, 'update']);


Route::post('saledetails/create',[SaleController::class, 'create']);
Route::get('saledetails/list',[SaleController::class, 'list']);
Route::get('saledetails/show/{saledetail}',[SaleController::class, 'show']);
Route::delete('saledetails/{saledetail}',[SaleController::class, 'delete']);
Route::put('saledetails/{saledetail}',[SaleController::class, 'update']);