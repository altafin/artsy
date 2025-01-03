<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReceiptRequest;
use App\Models\Receipt;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReceiptController extends Controller
{
    public function pagination(): JsonResponse
    {
        return response()->json([
            'data' => Receipt::paginate(5)
        ], Response::HTTP_CREATED);
    }

    public function store(ReceiptRequest $request): JsonResponse
    {
        $receipt = Receipt::create($request->all());
        return response()->json([
            'data' => $receipt
        ], Response::HTTP_CREATED);
    }
}
