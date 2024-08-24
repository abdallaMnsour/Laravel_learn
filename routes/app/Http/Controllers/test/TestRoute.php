<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestRoute extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo 'hello world';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo 'hello create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {echo 'testasdfasdf';
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo 'test';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo 'destroy';
    }
}
