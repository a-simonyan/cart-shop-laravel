<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function saveOrder(Request $request)
    {
        $order = Orders::create($request->all());
        return response()->json($order);
    }
}
