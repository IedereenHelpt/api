<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// This endpoint does not need authentication.
Route::get('/public', function (Request $request) {
    return response()->json(['message' => 'Hello from a public endpoint!']);
});

// These endpoints require a valid access token.
Route::middleware(['jwt'])->group(function () {
    Route::get('/private', function (Request $request) {
        return response()->json(['message' => 'Hello from a private endpoint!']);
    });
});
