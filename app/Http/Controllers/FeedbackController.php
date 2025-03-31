<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function getIndex() {
        return view('Page.contact');
    }
}
