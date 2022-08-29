<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\maisons;
use App\Models\User;
use App\Models\villes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MaisonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maison = maisons::all();
        return view('admin.maisons.index', compact('maison'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        $villes= villes::all();
        return view('admin.maisons.create', compact('categories','villes'));
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
            'title' => 'required',
            'address' => 'required',
            'description'=> 'required',
            'equipment'=> 'required',
            'price'=> 'required',
        ]);
        $maisons = new maisons();
        $maisons->title = $request->title;
        $maisons->address = $request->address;
        $maisons->description = $request->description;
        $maisons->price = $request->price;
        $maisons->equipment = $request->equipment;
        $maisons->category_id = $request->category_id;
        $maisons->ville_id = $request->ville_id;
        $maisons->user_id = $request->user_id;
        $maisons->gallery= $request->gallery;


        $maisons->slug = Str::slug($request->title);
        $maisons->save();
        return redirect()->route('maisons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\maisons  $maisons
     * @return \Illuminate\Http\Response
     */
    public function show(maisons $maisons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\maisons  $maisons
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $maisons = maisons::find(decrypt($id));
        $categories = Category::all();
        $villes =villes::all();
        $users =User::all();
        return view('admin.maisons.edit', compact('maisons','categories','villes','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\maisons  $maisons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required'

        ]);
        $maisons = maisons::find($id);
        $maisons->name = $request->name;
        $maisons->title = $request->title;
        $maisons->address = $request->address;
        $maisons->price = $request->price;
        $maisons->description = $request->description;
        $maisons->equipment = $request->equipment;
        $maisons->category_id = $request->category_id;
        $maisons->ville_id = $request->ville_id;
        $maisons->user_id = $request->user_id;
        $maisons->gallery= $request->gallery;

        $maisons->save();
        return redirect()->route('maisons.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\maisons  $maisons
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        maisons::destroy($id);
        return redirect()->route('maisons.index');
    }
}
