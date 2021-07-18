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
        return view('pages.backOffice.contactBack');
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
    public function show($id)
    {
        $show = ContactTitreStatic::find($id);
        return view('pages.backOffice.showHome.show4', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactTitreStatic  $contactTitreStatic
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $edit = ContactTitreStatic::find($id);
        return view('pages.backOffice.editsta.edit6',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactTitreStatic  $contactTitreStatic
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $update = ContactTitreStatic ::find($id);
        $update->titreContact = $request->titreContact;
        $update->sous_titreContact = $request->sous_titreContact;
        $update->paraContact = $request->paraContact;
        $update->save();
        return redirect('/backoffice/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactTitreStatic  $contactTitreStatic
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $destroy = ContactTitreStatic ::find($id);
        $destroy->delete();
        return redirect("/");
    }
}
