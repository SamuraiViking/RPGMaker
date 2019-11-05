<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationsController extends Controller
{
    public function index()
    {
        return Location::all();
    }
    public function show(Location $location)
    {
        return $location;
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|unique:locations|max:255',
            'text' => 'required|max:255',
        ]);

        $location = Location::create($attributes);

        return response()->json($location, 201);
    }
    public function update(Location $location)
    {
        $location->update(request()->all());

        return response()->json($location, 200);
    }
    public function destroy(Location $location)
    {
        $location->delete();

        return response()->json(null, 204);
    }
}
