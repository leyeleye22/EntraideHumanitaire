<?php

namespace App\Http\Controllers;

use App\Models\Beneficiare;
use App\Http\Requests\StoreBeneficiareRequest;
use App\Http\Requests\UpdateBeneficiareRequest;

class BeneficiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexWithMessage()
    {
        return view('Admin.beneficiaires.index', [
            'beneficiaires' =>Beneficiare::orderBy('created_at', 'desc')->paginate(9),
            'message' => 'Enregistrement réussi',
        ]);
    }
    public function index()
    {
        return view('Admin.beneficiaires.index', [
            'beneficiaires' =>Beneficiare::orderBy('created_at', 'desc')->paginate(9)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.beneficiaires.form', [
            'beneficiaire' => new Beneficiare(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBeneficiareRequest $request)
    {
        if( Beneficiare::where('email', $request->validated('email'))->exists() )
        {
            return redirect()->back()->with(['error' => 'Cet utilisateur existe déjà', 'beneficiare' => $request->validated()]);
        }
        Beneficiare::create($request->validated());
        return $this ->indexWithMessage();
    }

    /**
     * l'admin na pas besoin de show
     */
    public function show(Beneficiare $beneficiaire)
    {
         return view('Admin.beneficiares.show', ['beneficiaire' => $beneficiaire]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beneficiare $beneficiaire)
    {
        return view('Admin.beneficiaires.form', ['beneficiaire' => $beneficiaire]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeneficiareRequest $request, Beneficiare $beneficiaire)
    {    
        $beneficiaire->update($request->validated());
        return $this->indexWithMessage();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beneficiare $beneficiaire)
    {
      
        $beneficiaire->delete();
        return redirect()->back()->with('succes', 'Suppression réusi');

    }
}
