<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    function homepage (){
        return view("page.homepage");
    }

    function about(){
        $halaman = "about";

        return view('page.about', compact('halaman'));
    }



}
