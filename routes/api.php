<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceiptController;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::get('/receipts', [ReceiptController::class, 'pagination']);
Route::post('/receipt', [ReceiptController::class, 'store']);
