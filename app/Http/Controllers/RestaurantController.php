<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $restaurants = Restaurant::get();
        return response()->json($restaurants, 201);
    }

    public function store(Request $request)
    {
        $restaurant = new Restaurant();
        $restaurant->fill($request->all());
        $restaurant->save();

        return response()->json($restaurant, 201);
    }
}
