<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\City;

class CityController extends Controller
{
    public function index(Request $request)
    {
        $cities = City::get();
        return response()->json($cities, 201);
    }

    public function store(Request $request)
    {
        $City = new City();
        $City->fill($request->all());
        $City->save();

        return response()->json($City, 201);
    }
}
