<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function getDetail(Request $request){
        $product = Product::where('product_id', $request->id)->first();

        return view('Page.details', compact('product'));
    }
}
