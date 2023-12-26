<?php

namespace App\Http\Controllers;

use App\Models\Donmateriel;
use App\Http\Requests\StoreDonmaterielRequest;
use App\Http\Requests\UpdateDonmaterielRequest;
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
        //
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
