<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use App\Order;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $order = Order::all();
        //dd($product);
        return view('pages.user.order.index', compact('order'));
    }

    
    public function create()
    {
        return view('pages.user.order.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            "shopping_address" => 'required',
            "order_address" => 'required',
            "order_email" => 'required',
            "order_status" => 'required',
            "user_id" =>'required'
        ]);

        $order = Order::create([
            'shopping_address' => $request['shopping_address'],
            'order_address' => $request['order_address'],
            'order_email' => $request['order_email'],
            'order_status' => $request['order_status'],
            'user_id' => $request['user_id']
        ]);

        Alert::success('Berhasil', 'Request Order Berhasil Ditambahkan');

        return redirect('/order')->with('success', 'Request Order Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $order = Order::find($id);

        return view('pages.user.order.show', compact('order'));
    }

    public function edit($id)
    {
        $order = Order::find($id);

        return view('pages.user.order.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "shopping_address" => 'required',
            "order_address" => 'required',
            "order_email" => 'required',
            "order_status" => 'required',
            "user_id" => 'required'
        ]);

        $order = Order::where('id', $id)->update([
            'shopping_address' => $request['shopping_address'],
            'order_address' => $request['order_address'],
            'order_email' => $request['order_email'],
            'order_status' => $request['order_status'],
            'user_id' => $request['user_id']
        ]);

        Alert::success('Berhasil', 'Request Order Berhasil Diupdate');

        return redirect('/order')->with('success', 'Request Order Berhasil Diupdate');
    }

    public function destroy($id)
    {
        Order::destroy($id);

        Alert::success('Berhasil', 'Request Order Berhasil Dihapus');

        return redirect('/order')->with('success', 'Request Order Berhasil Dihapus!');
    }
}
