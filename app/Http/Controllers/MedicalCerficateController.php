<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicalCerficateRequest;
use App\Http\Requests\UpdateMedicalCerficateRequest;
use App\Models\MedicalCerficate;

class MedicalCerficateController extends Controller
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
     * @param  \App\Http\Requests\StoreMedicalCerficateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicalCerficateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicalCerficate  $medicalCerficate
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalCerficate $medicalCerficate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicalCerficate  $medicalCerficate
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalCerficate $medicalCerficate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicalCerficateRequest  $request
     * @param  \App\Models\MedicalCerficate  $medicalCerficate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicalCerficateRequest $request, MedicalCerficate $medicalCerficate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicalCerficate  $medicalCerficate
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalCerficate $medicalCerficate)
    {
        //
    }
}
