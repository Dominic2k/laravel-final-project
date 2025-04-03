<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex(){
        return view('Page.homepage');
    }

    public function showDetail(){
        return view('Page.detail_product');
    }

    public function showAboutUs() {
        return view('Page.about_us');
    }
}
