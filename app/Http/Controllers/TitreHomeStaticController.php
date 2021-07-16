<?php

namespace App\Http\Controllers;

use App\Models\TitreHomeStatic;
use Illuminate\Http\Request;

class TitreHomeStaticController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new TitreHomeStatic;
        $store->titre = $request->titre;
        $store->lien= $request->lien;
        $store->save;
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TitreHomeStatic  $titreHomeStatic
     * @return \Illuminate\Http\Response
     */
    public function show(TitreHomeStatic $titreHomeStatic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TitreHomeStatic  $titreHomeStatic
     * @return \Illuminate\Http\Response
     */
    public function edit(TitreHomeStatic $titreHomeStatic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TitreHomeStatic  $titreHomeStatic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TitreHomeStatic $titreHomeStatic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TitreHomeStatic  $titreHomeStatic
     * @return \Illuminate\Http\Response
     */
    public function destroy(TitreHomeStatic $titreHomeStatic)
    {
        //
    }
}
