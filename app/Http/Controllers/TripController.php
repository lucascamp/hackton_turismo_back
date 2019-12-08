<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Trip;

class TripController extends Controller
{
    public function index(Request $request)
    {
        $trips = Trip::get();
        return response()->json($trips, 201);
    }

    public function store(Request $request)
    {
        $trip = new Trip();
        $trip->fill($request->all());
        $trip->save();

        return response()->json($trip, 201);
    }
}
