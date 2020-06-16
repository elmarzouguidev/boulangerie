<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    //

    public function index()
    {
        return view('frontEnd.City.index');
    }

    public function single($slug)
    {
        return view('frontEnd.City.Single.index',compact('slug'));
    }
    public function boulangerie()
    {
        return view('frontEnd.City.Single.index',compact('slug')); 
    }
}
