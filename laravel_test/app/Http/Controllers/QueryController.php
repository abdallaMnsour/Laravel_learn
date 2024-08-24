<?php

namespace App\Http\Controllers;

use App\Http\Requests\QueryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class QueryController extends Controller
{
    static function index()
    {
        // $comments = DB::select('select * from comments');
        $comments = DB::table('comments')->get();
        return view('queryProject.main', compact('comments'));
    }

    static function add_message()
    {
        return view('queryProject.add_message');
    }

    static function create(QueryRequest $request)
    {
        // $title = $request->title;
        // $comment = $request->input('comment');

        // $bool = $request->validate([
        //     'mytitle' => 'required|min:3|max:20',
        //     'comments' => 'required',
        // ], []);

        // if ($bool) {
        //     DB::table('comments')->insert([
        //         'title' => $title,
        //         'comment' => $comment,
        //     ]);

        //     return redirect()->route('main');
        // }

        // return redirect()->route('main');

        // $username = 'ali';

        $data = $request->validated();
        // $data = $request->validate([
        //     'title' => 'required|min:19|max:20',
        //     'email' => 'required|email',
        //     'comment' => 'required',
        //     'image' => 'required|image',
        // ], [
        //     'title.required' => 'inter your :attribute',
        // ], [
        //     'title' => 'username',
        // ]);

        // $data = Validator::make($request->all(), [
        //     'title' => 'required|min:19|max:20',
        //     'email' => 'required|email',
        //     'comment' => 'required',
        //     'image' => 'required|image',
        // ], [
        //     'title.required' => 'inter your :attribute',
        // ], [
        //     'title' => 'username',
        // ]);

        dd($data);

        return redirect('query');
        // return redirect()->route('main', compact('username'));
        // return redirect()->route('main', ['username' => 'ali']);
        // return redirect()->route('main')->with(['username' => 'ali']);

        return redirect()->route('main')->cookie('name_user', 'abdelrahman', 5);
    }
    static function update($id)
    {
        echo $id;
    }
    static function delete($id)
    {
        echo $id;
    }
}
