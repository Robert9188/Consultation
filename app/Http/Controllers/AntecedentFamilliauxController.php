<?php

namespace App\Http\Controllers;

use App\Models\Antecedent_familliaux;
use App\Http\Requests\StoreAntecedent_familliauxRequest;
use App\Http\Requests\UpdateAntecedent_familliauxRequest;
use App\Models\Patient;
use Illuminate\Http\Response;

class AntecedentFamilliauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Antecedent_familliaux::all());
        return 'ok';
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
     * @param  \App\Http\Requests\StoreAntecedent_familliauxRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAntecedent_familliauxRequest $request, Patient $patient)
    {
         $antecedent_familliaux = $patient->antecedent_familliaux()->create($request->validated());
        return response()->json($antecedent_familliaux);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Antecedent_familliaux  $antecedent_familliaux
     * @return \Illuminate\Http\Response
     */
    public function show(Antecedent_familliaux $antecedent_familliaux)
    {
        return response()->json($antecedent_familliaux);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Antecedent_familliaux  $antecedent_familliaux
     * @return \Illuminate\Http\Response
     */
    public function edit(Antecedent_familliaux $antecedent_familliaux)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAntecedent_familliauxRequest  $request
     * @param  \App\Models\Antecedent_familliaux  $antecedent_familliaux
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAntecedent_familliauxRequest $request, Antecedent_familliaux $antecedent_familliaux)
    {
        $antecedent_familliaux->update($request->validated());
        return response()->json($antecedent_familliaux);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Antecedent_familliaux  $antecedent_familliaux
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antecedent_familliaux $antecedent_familliaux)
    {
        $antecedent_familliaux->delete();
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
