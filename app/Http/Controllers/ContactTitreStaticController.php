<?php

namespace App\Http\Controllers;

use App\Models\ContactTitreStatic;
use Illuminate\Http\Request;

class ContactTitreStaticController extends Controller
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
        $store = new ContactTitreStatic;
        $store->titreContact = $request-> titreContact;
        $store->sous_titreContact = $request->sous_titreContact ;
        $store->paraContact = $request->paraContact;
        $store->save;
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactTitreStatic  $contactTitreStatic
     * @return \Illuminate\Http\Response
     */
    public function show(ContactTitreStatic $contactTitreStatic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactTitreStatic  $contactTitreStatic
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactTitreStatic $contactTitreStatic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactTitreStatic  $contactTitreStatic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactTitreStatic $contactTitreStatic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactTitreStatic  $contactTitreStatic
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactTitreStatic $contactTitreStatic)
    {
        //
    }
}
