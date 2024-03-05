<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::paginate(10);

        return view('admin_panel.orders.index', compact('orders'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Order::query()->create(['product_id' => $request->productID, 'user_id' => Auth::id()]);

        return redirect()->route('home');
    }


    public function show(Order $order)
    {
        return view('admin_panel\orders\show',compact('order'));
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function OrderCreate(Request $request)
    {
        Order::query()->create(['product_id' => $request->productID, 'user_id' => Auth::id()]);

        return redirect()->route('home');
    }
}
