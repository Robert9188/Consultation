<?php

namespace App\Http\Controllers;

use App\Models\Bilans;
use App\Http\Requests\StoreBilansRequest;
use App\Http\Requests\UpdateBilansRequest;
use App\Models\Patient;
use Illuminate\Http\Response;

class BilansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Bilans::all());
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
     * @param  \App\Http\Requests\StoreBilansRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBilansRequest $request,Patient $patient)
    {
        $bilans = $patient->bilans()->create($request->validated());
        return response()->json($bilans);
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bilans  $bilans
     * @return \Illuminate\Http\Response
     */
    public function show(Bilans $bilan)
    {
        return response()->json($bilan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bilans  $bilans
     * @return \Illuminate\Http\Response
     */
    public function edit(Bilans $bilans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBilansRequest  $request
     * @param  \App\Models\Bilans  $bilans
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBilansRequest $request, Bilans $bilan)
    {
        $bilan->update($request->validated());
        return response()->json($bilan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bilans  $bilans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bilans $bilan)
    {
        $bilan->delete();
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
