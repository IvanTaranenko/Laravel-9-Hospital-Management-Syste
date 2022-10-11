<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImmunitazionRequest;
use App\Http\Requests\UpdateImmunitazionRequest;
use App\Models\Immunitazion;

class ImmunitazionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImmunitazionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImmunitazionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Immunitazion  $immunitazion
     * @return \Illuminate\Http\Response
     */
    public function show(Immunitazion $immunitazion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Immunitazion  $immunitazion
     * @return \Illuminate\Http\Response
     */
    public function edit(Immunitazion $immunitazion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImmunitazionRequest  $request
     * @param  \App\Models\Immunitazion  $immunitazion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImmunitazionRequest $request, Immunitazion $immunitazion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Immunitazion  $immunitazion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Immunitazion $immunitazion)
    {
        //
    }
}
