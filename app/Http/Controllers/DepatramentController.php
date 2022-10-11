<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepatramentRequest;
use App\Http\Requests\UpdateDepatramentRequest;
use App\Models\Depatrament;

class DepatramentController extends Controller
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
     * @param  \App\Http\Requests\StoreDepatramentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepatramentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Depatrament  $depatrament
     * @return \Illuminate\Http\Response
     */
    public function show(Depatrament $depatrament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Depatrament  $depatrament
     * @return \Illuminate\Http\Response
     */
    public function edit(Depatrament $depatrament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDepatramentRequest  $request
     * @param  \App\Models\Depatrament  $depatrament
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepatramentRequest $request, Depatrament $depatrament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Depatrament  $depatrament
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depatrament $depatrament)
    {
        //
    }
}
