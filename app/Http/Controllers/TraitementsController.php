<?php

namespace App\Http\Controllers;

use App\Models\Traitements;
use App\Http\Requests\StoreTraitementsRequest;
use App\Http\Requests\UpdateTraitementsRequest;
use App\Models\Antecedents;
use Illuminate\Http\Response;


class TraitementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Traitements::all());
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
     * @param  \App\Http\Requests\StoreTraitementsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTraitementsRequest $request,Antecedents $antecedent)
    {
        $traitements = $antecedent->traitements()->create($request->validated());
        return response()->json($traitements);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Traitements  $traitements
     * @return \Illuminate\Http\Response
     */
    public function show(Traitements $traitement)
    {
        return response()->json($traitement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Traitements  $traitements
     * @return \Illuminate\Http\Response
     */
    public function edit(Traitements $traitements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTraitementsRequest  $request
     * @param  \App\Models\Traitements  $traitements
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTraitementsRequest $request, Traitements $traitement)
    {
        $traitement->update($request->validated());
        return response()->json($traitement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Traitements  $traitements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Traitements $traitement)
    {
        $traitement->delete();
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
