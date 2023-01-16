<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getProduct()
    {
        $products = Products::with(['color','quality','size','style'])->get();
        return response()->json($products);
    }
}
