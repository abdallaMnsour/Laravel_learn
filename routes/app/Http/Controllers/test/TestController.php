<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function new_fun ()
    {
        echo 'hello new from test';
    }

    public function add_fun ()
    {
        echo 'hello add from test';
    }

    public function delete_fun ()
    {
        $id = 3;

        $array = ['first' => 'abdalla', 'second' => 'tasnim', 'thired' => 'abdelrahman', 'fourth' => 'sana'];

        // return view('all_users')->with(['name' => $array]);

        // get variables in this function array = $array and id = $id
        // return view('all_users', compact('array'));

        // return view('all_users', ['user' => $array]);

        return view('all_users', get_defined_vars());
    }
}
