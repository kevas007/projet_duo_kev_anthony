<?php

namespace App\Http\Controllers;

use App\Models\TitrePFooter;
use Illuminate\Http\Request;

class TitrePFooterController extends Controller
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
        $store = new TitrePFooter;
        $store->email = $request->email;
        $store->titre = $request->titre;
        $store->paragraphe = $request->paragraphe;
        $store->save;
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TitrePFooter  $titrePFooter
     * @return \Illuminate\Http\Response
     */
    public function show(TitrePFooter $titrePFooter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TitrePFooter  $titrePFooter
     * @return \Illuminate\Http\Response
     */
    public function edit(TitrePFooter $titrePFooter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TitrePFooter  $titrePFooter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TitrePFooter $titrePFooter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TitrePFooter  $titrePFooter
     * @return \Illuminate\Http\Response
     */
    public function destroy(TitrePFooter $titrePFooter)
    {
        //
    }
}
