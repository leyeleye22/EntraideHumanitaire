<?php

namespace App\Http\Controllers;

use App\Models\Donateur;
use App\Http\Requests\StoreDonateurRequest;
use App\Http\Requests\UpdateDonateurRequest;
use App\Models\DonMateriel;
use Illuminate\Http\Client\Request;

class DonateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function donmateriel(Request $request)
    {
        $donneesDonnateursValide = $request->validated();
        $donateur = new Donateur();

        $donateur->nom_complet = $donneesDonnateursValide->nomcomplet;
        $donateur->email = $donneesDonnateursValide->email;
        $donateur->telephone = $donneesDonnateursValide->telephone;
        if ($donateur->save()) {
            $donMAteriel = new DonMateriel();
            $donMAteriel->adresse=$donneesDonnateursValide->adresse;
            $donMAteriel->telephone=$donneesDonnateursValide->telephone;
            $donMAteriel->donateur_id=$donateur->id;
            $donMAteriel->projet_id=$donneesDonnateursValide->projetId;
            if($donMAteriel->save()){
                
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonateurRequest $request)
    {
        $donneesDonnateursValide = $request->validated();
        $donateur = Donateur::create($donneesDonnateursValide);
    }

    /**
     * Display the specified resource.
     */
    public function show(Donateur $donateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donateur $donateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonateurRequest $request, Donateur $donateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donateur $donateur)
    {
        //
    }
}
