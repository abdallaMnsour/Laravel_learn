<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('username');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo 'testtt';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo 'hello mr abdalla';
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo 'edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo 'update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo 'destroy';
    }
}
