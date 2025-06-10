<?php

namespace App\Http\Controllers;

abstract class Controller
{
    /**
     * Always use this function to produce consistent JSON format
     * 
     * @param int $status HTTP Status Code
     * @param string $message Short message
     * @param any $data The data you want to display
     * 
     * @return JSON with { status: $status, message: $message, data: $data } format
     */
    protected function responseJson(
        $status = 200,
        $message = 'Success',
        $data = null,
    )
    {
        return response()->json([
            'status' => $status,
            'message' => __($message),
            'data' => $data,
        ], $status);
    }
}
