<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/location', 'LocationsController@index');




# Step 1

# Location
    # Name
    # Text








# Location
    # Location (has many)   
    # Event (has many)
    # Name
    # Image

# Event (Belongs to Location)
    # Combat (Subclass)
    # Shop (Subclass)
    # Name
    # Image
    # Text

# Combat (Super Event) 
    # 
    # Monster


# NPC
    # Text


# Monster
    # Items
    # Stats

# Items
    # Armour (SubClass) 
    # Name
    # Value