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
    public function patisserieShop($slug)
    {
        return view('frontEnd.Shop.index');
    }
    public function shop()
    {
        return view('frontEnd.Shop.index');
    }


    public function fnbp()
    {

        return view('frontEnd.Fnbp.index');
    }

    public function transDigital()
    {
        return view('frontEnd.transDigital.index');
    }

    public function espacePro()
    {
        return view('frontEnd.EspacePro.index');
    }

    /****Blog */

    public function blog()
    {
        return view('frontEnd.Blog.index');
    }
    public function blogSingle($slug)
    {
        return view('frontEnd.Blog.Single.index');
    }
}
