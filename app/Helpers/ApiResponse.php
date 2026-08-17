<?php

namespace App\Helpers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class ApiResponse
{
    public static function success(
        JsonResource|array|null $data = null,
        string $message = 'Success',
        int $StatusCode = Response::HTTP_OK
    ) {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ], $StatusCode);
    }

    public static function error(
        string $message,
        int $StatusCode = Response::HTTP_BAD_REQUEST,
        array $errors = []
    ) {
        return response()->json([
            'success' => false,
            'message' => $message,
            'errors' => $errors,
        ], $StatusCode);
    }
}
