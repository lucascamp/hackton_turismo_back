<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->save();

        return response()->json($user, 201);
    }
}
