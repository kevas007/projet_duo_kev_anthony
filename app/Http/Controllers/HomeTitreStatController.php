<?php

namespace App\Http\Controllers;

use App\Models\HomeTitreStat;
use App\Models\TitreHomeStatic;
use Illuminate\Http\Request;

class HomeTitreStatController extends Controller
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
        $store ->titre = $request->titre;
        $store ->para = $request->para;
        $store->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeTitreStat  $homeTitreStat
     * @return \Illuminate\Http\Response
     */
    public function show(HomeTitreStat $homeTitreStat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeTitreStat  $homeTitreStat
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeTitreStat $homeTitreStat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeTitreStat  $homeTitreStat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeTitreStat $homeTitreStat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeTitreStat  $homeTitreStat
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeTitreStat $homeTitreStat)
    {
        //
    }
}
