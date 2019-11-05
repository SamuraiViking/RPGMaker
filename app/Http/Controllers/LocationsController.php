<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationsController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('location.index', compact('locations'));
    }
}
