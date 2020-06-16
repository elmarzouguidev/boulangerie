<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BakeryController extends Controller
{
    //

    public function index()
    {
        return view('frontEnd.Bakery.index');
    }

    public function single($slug)
    {
        return view('frontEnd.Bakery.Single.index',compact('slug')); 
    }
}
