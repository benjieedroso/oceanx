<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TripController extends Controller
{
    //
    public function show(){
        return Inertia::render('Home');
    }
}
