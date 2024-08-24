<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResources;
use Illuminate\Support\Facades\Validator;

class apiController extends Controller
{

    use ApiResponseTrait;

    public function index ()
    {

        // $user = User::where('id', 1)->first(['name as xx', 'email as em']);

        $user = User::get();

        if (count($user) > 0) {
            $user = UserResources::collection($user);
            $data = $this->apiResponse($user, 200, 'get user successfully');
        } else {
            $data = $this->apiResponse(null, 401);
        }

        return $data;

    }

    public function find($id) {


        $user = new UserResources(User::find($id));
        
        return response($user, 200);

    }

    public function store (Request $request) {

        $validateData = Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:3', 'max:20'],
            'email' => ['required', 'string', 'email', 'unique:users'],
        ]);

        if ($validateData->fails()) {
            return $this->apiResponse(null, 401, 'error in insert user');
        }

        User::create($request->all());
        return $this->apiResponse($request->all(), 200, 'created user successfully');

    }
}
