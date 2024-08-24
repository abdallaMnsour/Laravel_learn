<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function main()
    {
        return view('main-project.main');
    }

    function about()
    {
        return view('main-project.about');
    }

    function contact (Request $request)
    {
        
        if (null === $request->message && null === $request->input('name')) {
            return view('main-project.contact');
        } else {
            $name = $request->name;
            $message = $request->input('message');
            return view('main-project.contact', compact('name', 'message'));
        }
    }
}
