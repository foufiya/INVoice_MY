<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = Fournisseur::all();
        return view('fournisseurs.index', compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fournisseurs.create');
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
            'telephone' => 'required',
            'fax' => 'numeric|nullable',
            'email' => 'required|email|unique:fournisseurs',
            'address' => 'required',
        ]);

        Fournisseur::create($request->all());

        return redirect()->route('fournisseurs.index')
            ->with('success', 'Fournisseur created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function show(Fournisseur $fournisseur)
    {
        return view('fournisseurs.show', compact('fournisseur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function edit(fournisseur $fournisseur)
    {
        return view('fournisseurs.edit', compact('fournisseur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fournisseur $fournisseur)
    {
        $request->validate([
            'name' => 'required',
            'telephone' => 'required',
            'fax' => 'numeric|nullable',
            'email' => 'required|email|unique:fournisseurs,email,' . $fournisseur->id,
            'address' => 'required',
        ]);

        $fournisseur->update($request->all());

        return redirect()->route('fournisseurs.index')
            ->with('success', 'Fournisseur updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fournisseur $fournisseur)
    {
        $fournisseur->delete();

        return redirect()->route('fournisseurs.index')
            ->with('success', 'Fournisseur deleted successfully.');
    }
}
