<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Inertia\Inertia;

namespace App\Http\Controllers;

use App\Models\Product as ProductModel;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch products or any logic you need
        $products = ProductModel::all();
        return view('products.index', compact('products')); // or return a JSON response
    }
}
