<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = ['Punisher', 'Lost', "Greys Anatomy"];
        return view('series.index')->with("series", $series);
    }
}
