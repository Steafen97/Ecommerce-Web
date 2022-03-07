<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use App\Product;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $product = Product::all();
        //dd($product);
        return view('pages.admin.product.index', compact('product'));
    }

    public function create()
    {
        return view('pages.admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "price" => 'required',
            "weight" => 'required',
            "descriptions" => 'required',
            "image" => 'required',
            "stock" => 'required',
            "categories_id" => 'required'
        ]);

        $product = Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'weight' => $request['weight'],
            'descriptions' => $request['descriptions'],
            'image' => $request['image'],
            'stock' => $request['stock'],
            'categories_id' => $request['categories_id']
        ]);

        Alert::success('Berhasil', 'Berhasil Menambahkan Produk Baru');

        return redirect('/product')->with('success', 'Produk Berhasil Ditambahkan!');
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('pages.admin.product.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('pages.admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => 'required',
            "price" => 'required',
            "weight" => 'required',
            "descriptions" => 'required',
            "image" => 'required',
            "stock" => 'required',
            "categories_id" => 'required'
        ]);

        $product = Product::where('id', $id)->update([
            'name' => $request['name'],
            'price' => $request['price'],
            'weight' => $request['weight'],
            'descriptions' => $request['descriptions'],
            'image' => $request['image'],
            'stock' => $request['stock'],
            'categories_id' => $request['categories_id']
        ]);

        Alert::success('Berhasil', 'Produk Berhasil Diupdate');

        return redirect('/product')->with('success', 'Produk Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        Product::destroy($id);

        Alert::success('Berhasil', 'Produk Berhasil Dihapus');

        return redirect('/product')->with('success', 'Produk Berhasil Dihapus!');
    }
}
