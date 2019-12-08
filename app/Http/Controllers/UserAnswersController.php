<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserAnswer;
use App\Trip;
use App\Restaurant;
use App\City;

class UserAnswersController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with('UserAnswer', 'Trip', 'Restaurant', 'City')->get();
        return response()->json($users, 201);
    }

    public function store(Request $request)
    {
        $userAnswer = new UserAnswer();
        $userAnswer->fill($request->all());
        $userAnswer->save();

        return response()->json($userAnswer, 201);
    }
}
