<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        if (session('id')) {
            return view('content.orders.ordersList');
        } else {
            return redirect('404');
        }
    }

    public function show($order_id)
    {
        if (session('id')) {
            return view('content.orders.orderView', compact('order_id'));
        } else {
            return redirect('404');
        }
    }
}
