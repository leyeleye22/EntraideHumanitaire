<?php

namespace App\Http\Controllers;

use App\Models\Beneficiare;
use App\Http\Requests\StoreBeneficiareRequest;
use App\Http\Requests\UpdateBeneficiareRequest;

class BeneficiareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beneficiaire = Beneficiare::all()->paginate(5);
        return view('', ['beneficiare' => $beneficiaire]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBeneficiareRequest $request)
    {
        $beneficiaire = Beneficiare::create($request->validated());
        return to_route('')->with('beneficiaire', '');
    }

    /**
     * Display the specified resource.
     */
    public function show(Beneficiare $beneficiare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beneficiare $beneficiare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeneficiareRequest $request, Beneficiare $beneficiare)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beneficiare $beneficiare)
    {
        //
    }
}
