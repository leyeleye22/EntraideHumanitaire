<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProjetRequest;
use App\Http\Requests\UpdateProjetRequest;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::paginate(5);
        return view('Admin.projet.index', compact('projets'));
    }
    public function indexprojet()
    {
        $projets = Projet::paginate(5);
        return view('Admin.Projet', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projet = new Projet();
        return view('Admin.projet.form', compact('projet'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjetRequest $request)
    {


        $projetValider = $request->validated();
        $projetValider['user_id'] = auth()->user()->id;
        $image = $projetValider['image'];
        if ($image !== null && !$image->getError()) {
            $projetValider['image'] = $image->store('image', 'public');
        }


        if ($projet = Projet::create($projetValider)) {
            return redirect()->route('admin.projet.index')->with('success', 'Projet enregistré avec succès');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        return view('Admin.voirplus', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        return view('Admin.projet.form', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjetRequest $request, Projet $projet)
    {


        $projetValider = $request->validated();
        $projetValider['user_id'] = Auth::user()->id;
        $image = $projetValider['image'];
        if ($image !== null && !$image->getError()) {
            if ($projet->image) {
                Storage::disk('public')->delete($projet->image);
            }
            $projetValider['image'] = $image->store('image', 'public');
        }
        // dd($projetValider);
        if ($projet->update($projetValider)) {
            return redirect()->route('admin.projet.index')->with('success', 'Projet modifié avec succès');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet)
    {
        if ($projet->delete()) {
            return redirect()->route('admin.projet.index')->with('success', 'Le projet a été supprimé');
        }
    }
}
