<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index()
    {
        return view('frontEnd.Home.index');
    }

    public function patisserie()
    {
        return view('frontEnd.Patisserie.index');
    }

    public function shop()
    {
        return view('frontEnd.Shop.index');
    }

    public function fnbp(){
        
        return view('frontEnd.Fnbp.index');
    }
}
