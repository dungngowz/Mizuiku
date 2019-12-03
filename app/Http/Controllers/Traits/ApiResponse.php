<?php
namespace App\Http\Controllers\Traits;

trait ApiResponse
{
    public function response($code = 200, $status = false, $data = null, $message = null)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}