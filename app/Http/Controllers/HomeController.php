<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex(){
        return view('Page.homepage');
    }
}

