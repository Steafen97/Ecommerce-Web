<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Categorie;
use File;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categori = Categorie::all();
        return view('pages.admin.categorie.index', compact('categori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|mimes:png,jpg,jpeg',
        ]);
        $fileName = time().'.'.$request->thumbnail->extension();

        $categori = new Categorie;
        $categori->name = $request->name;
        $categori->description = $request->description;
        $categori->thumbnail = $fileName;
        $categori->save();
        $request->thumbnail->move(public_path('image'), $fileName);
        Alert::success('Berhasil', 'Request Order Berhasil Diupdate');
        return redirect('/categorie');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('pages.admin.categorie.detail', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('pages.admin.categorie.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'thumbnail' => 'mimes:png,jpg,jpeg',
        ]);
        $categorie = Categorie::findOrFail($id);
        if ($request->has('thumbnail')) {
            // $post_.delete();
            $path="image/";
            File::delete($path.$categorie->thumbnail);
            // $poster = $request->poster;
            // $new_gambar = time().'-'.$gambar->getClientOriginalName();
            // $gambar->move('upload/post/',$new_gambar);
            $fileName = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('image'), $fileName);
            $categorie_data = [
                'name' => $request->name,
                'description' => $request->description,
                'thumbnail' => $fileName,
            ];
        }else {
            $categorie_data = [
                'name' => $request->name,
                'description' => $request->description,
            ];
        }
        // $film->tags()->sync($request->tags);
        $categorie->update($categorie_data);
        return redirect('/categorie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $path="image/";
        File::delete($path.$categorie->thumbnail);
        $categorie->delete();
        return redirect('/categorie');
    }
}
