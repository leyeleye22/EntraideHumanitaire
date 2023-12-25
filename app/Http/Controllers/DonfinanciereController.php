<?php

namespace App\Http\Controllers;

use App\Models\Donfinanciere;
use App\Http\Requests\StoreDonfinanciereRequest;
use App\Http\Requests\UpdateDonfinanciereRequest;

class DonfinanciereController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonfinanciereRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Donfinanciere $donfinanciere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donfinanciere $donfinanciere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonfinanciereRequest $request, Donfinanciere $donfinanciere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donfinanciere $donfinanciere)
    {
        //
    }
}
