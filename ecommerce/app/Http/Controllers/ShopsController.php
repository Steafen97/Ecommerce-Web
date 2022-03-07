<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use App\Shop;

class ShopsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $shop = Shop::all();
        //dd($product);
        return view('pages.admin.shop.index', compact('shop'));
    }

    public function create()
    {
        return view('pages.admin.shop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "address" => 'required',
            "bio" => 'required'
        ]);

        $shop = Shop::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'bio' => $request['bio']
        ]);

        Alert::success('Berhasil', 'Berhasil Membuat Toko Baru');

        return redirect('/shop')->with('success', 'Toko Berhasil Dibuat!');
    }

    public function show($id)
    {
        $shop = Shop::find($id);

        return view('pages.admin.shop.show', compact('shop'));
    }

    public function edit($id)
    {
        $shop = Shop::find($id);

        return view('pages.admin.shop.edit', compact('shop'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => 'required',
            "address" => 'required',
            "bio" => 'required'
        ]);

        $shop = Shop::where('id', $id)->update([
            'name' => $request['name'],
            'address' => $request['address'],
            'bio' => $request['bio']
        ]);

        Alert::success('Berhasil', 'Toko Berhasil Diupdate');

        return redirect('/shop')->with('success', 'Toko Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        Shop::destroy($id);

        Alert::success('Berhasil', 'Toko Berhasil Dihapus');

        return redirect('/shop')->with('success', 'Toko Berhasil Dihapus!');
    }
}
