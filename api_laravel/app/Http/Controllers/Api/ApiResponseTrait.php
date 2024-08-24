<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
trait ApiResponseTrait {

    public function apiResponse ($data = null, int $status, string $message = 'no user')
    {

        $data = [
            'data' => $data,
            'message' => $message,
            'status' => $status,
        ];

        return response($data, $status);
    }

}
