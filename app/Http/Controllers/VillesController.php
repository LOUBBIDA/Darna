<?php

namespace App\Http\Controllers;

use App\Models\villes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class VillesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = villes::all();
        return view('admin.villes.index', compact('villes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.villes.create');

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
            'name' => 'required'
        ]);
        $villes = new villes();
        $villes->name = $request->name;

        $villes->slug = Str::slug($request->name);
        $villes->save();
        return redirect()->route('villes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function show(villes $villes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $villes = villes::find(decrypt($id));
        return view('admin.villes.edit', compact('villes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'

        ]);
        $ville = villes::find($id);
        $ville->name = $request->name;

        $ville->save();
        return redirect()->route('villes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        villes::destroy($id);
        return redirect()->route('villes.index');
    }
}
