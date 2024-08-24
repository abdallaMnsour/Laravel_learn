<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestInvokeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($name = '')
    {
        return view('username');
    }
}
