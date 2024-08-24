<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrudRequest;
use App\Models\Image;
use App\Models\User;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response as FacadesResponse;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('crud.main');
    }

    public function read(Request $request)
    {

        // dump(Cookie::get());
        // dump(Cookie::make('name', 'abdalla', 5, '/'));
        // $request->cookie();
        // return response()->cookie('name', 'abdalla', 1);
        // $response = new Response();
        // $response->withCookie(cookie('name', 'abdallamansour', 1));
        // $minutes = 60;
        // $response = new FacadesResponse('Set Cookie');
        // $response->withCookie(cookie('name', 'MyValue', $minutes));
        //   return $response;
        // $allUsers = DB::table('users')->get();
        // Cookie::queue('names', 'abdalla', 1);

        // return response(view('crud.read', compact('allUsers')))->cookie('name', 'abdalla', 1);
        // dump(Cookie::get());
        // setcookie('name', 'abdalla', time() + 20, '/');



        // dump(Cookie::get('name'));

        // $allUsers = User::get();

        // $allUsers = Image::first();
        // dump($allUsers->user, $allUsers);
        // dd($allUsers->images, $allUsers);


        $allUsers = User::all();

        return view('crud.read', compact('allUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(CrudRequest $request)
    {
        $validate = $request->validated();

        DB::table('users')->insert([
            'name' => $validate['username'],
            'email' => $validate['email'],
            'password' => $validate['password'],
        ]);

        return redirect()->route('crud.read');
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
        $user = DB::table('users')->where('id', $id)->get()->first();
        return view('crud.update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'username' => 'required|string|max:20|min:3',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        DB::table('users')->where('id', $id)->update([
            'name' => $validate['username'],
            'email' => $validate['email'],
            'password' => $validate['password'],
        ]);

        return redirect()->route('crud.read');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->delete($id);
        return redirect()->route('crud.read');
    }
}
