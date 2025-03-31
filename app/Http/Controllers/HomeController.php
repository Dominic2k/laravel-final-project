<?php

namespace App\Http\Controllers;

use App\Models\Chefs;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex(){
        $foods = Product::where('cate_id', 1)->get();
        $drinks = Product::where('cate_id', 2)->get();
        $others = Product::where('cate_id', 3)->get();
        if ($foods->isEmpty() || $drinks->isEmpty() || $others->isEmpty()) {
            return view('Page.homepage', ['foods' => [], 'drinks' => [], 'other' => [], 'message' => 'Nothing found for this category.']);
        }

        $chefs = Chefs::query()->get();
        return view('Page.homepage', compact('foods', 'drinks', 'others', 'chefs'));
    }
}
