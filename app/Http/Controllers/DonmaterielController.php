<?php

namespace App\Http\Controllers;

use App\Models\Donmateriel;
use App\Http\Requests\StoreDonmaterielRequest;
use App\Http\Requests\UpdateDonmaterielRequest;
use App\Models\Donateur;
use App\Models\Donprojet;
use App\Models\Projet;

class DonmaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Projet $projet)
    {
        return view('donmateriel',compact('projet'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonmaterielRequest $request)
    {
        //cree un donnateur dans la base de données 
        $donateur = Donateur::create([
            'nom_complet' => $request->nom_complet,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
        ]);
        //creer un donmateriel en le liant a un projet et un utilisateur
        if ($donateur->save() && $request->file('image')) {

            $image = $request->file('image')->store('image', 'public');
            $donmateriel = Donmateriel::create([
                'description' => $request->description,
                'imgage' => $image,
                'donateur_id' => $donateur->id,
                'projet_id' => $request->projet_id
            ]);
        }
        //creer un don projet qui est le recapitulatif d'un don
        // C'est a dire ça a l'id du donnateur ,celui du projet et par defaut un statut qui sera a false pour dire que le beneficiaore ne l'a pas encore reçu
        $donprojet = Donprojet::create([
            'donateur_id' => $donateur->id,
            'projet_id' => $request->projet_id
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Donmateriel $donmateriel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donmateriel $donmateriel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonmaterielRequest $request, Donmateriel $donmateriel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donmateriel $donmateriel)
    {
        //
    }
}
