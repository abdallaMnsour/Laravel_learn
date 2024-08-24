<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    function update_fun ()
    {
        return 'hello from controller update';
    }
    function add_fun ()
    {
        return 'hello from controller add';
    }
    function delete_fun ()
    {
        return 'hello from controller delete';
    }
    function all_users_fun ()
{
    return view('all_users');
}
}
