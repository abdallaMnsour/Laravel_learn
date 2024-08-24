<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_car.add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dump($request);
        // $request->validate([
        //     'username' => 'required|max:30|min:3',
        //     'email' => 'required|email',
        //     'password' => 'required',
        //     'image' => 'required|image|max:2024',
        // ]);

        dump($request->file());

        $image = $request->image;

        // $name = uniqid() . $image->getClientOriginalName();
        // dump($name);
        $name = uniqid() . '.' . $image->extension();

        dump($name);


        // $image->move(public_path('storage'), $name);
        // foreach ($images as $image) {
            // $image->store('/', 'public');

        // }


        // $name = $image->store('/', 'public');

        // dump($name);
        // User::create([
        //     'name' => $request->username,
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'email_verified_at' => now(),
        //     'car_id' => DB::table('cars')->inRandomOrder()->first()->id,
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
