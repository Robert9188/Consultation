<?php

namespace App\Http\Controllers;

use App\Models\Antecedents;
use App\Http\Requests\StoreAntecedentsRequest;
use App\Http\Requests\UpdateAntecedentsRequest;
use App\Models\Patient;
use Illuminate\Http\Response;

class AntecedentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Antecedents::all());
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
     * @param  \App\Http\Requests\StoreAntecedentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAntecedentsRequest $request,Patient $patient)
    {

        $antecedents = $patient->antecedents()->create($request->validated());
        return response()->json($antecedents);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Antecedents  $antecedents
     * @return \Illuminate\Http\Response
     */
    public function show(Antecedents $antecedent)
    {
        return response()->json($antecedent->load("traitements"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Antecedents  $antecedents
     * @return \Illuminate\Http\Response
     */
    public function edit(Antecedents $antecedent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAntecedentsRequest  $request
     * @param  \App\Models\Antecedents  $antecedents
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAntecedentsRequest $request, Antecedents $antecedent)
    {
        $antecedent->update($request->validated());
        return response()->json($antecedent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Antecedents  $antecedents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antecedents $antecedent)
    {
        $antecedent->delete();
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
