<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function featured(Request $request)
    {
        return Product::with('variants')->get();
        return response('nope', 200);
    }
}
