<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function pagination(): JsonResponse
    {
        return response()->json([
            'data' => Receipt::paginate(5)
        ]);
    }
}
