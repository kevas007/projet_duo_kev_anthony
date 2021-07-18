<?php

namespace App\Http\Controllers;

use App\Models\HomeTitreStat;
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
        return view('pages.backOffice.homeStatic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new HomeTitreStat;
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
    public function show($id)
    {
        $show = HomeTitreStat::find($id);
        return view('pages.backOffice.shomehome2.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeTitreStat  $homeTitreStat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HomeTitreStat::find($id);
        return view('pages.backOffice.editsta.edit2',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeTitreStat  $homeTitreStat
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $update = HomeTitreStat::find($id);
        $update->titre = $request->titre;
        $update->para = $request->para;
        $update->save();
        return redirect('/backoffice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeTitreStat  $homeTitreStat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = HomeTitreStat::find($id);
        $destroy->delete();
        return redirect("/");
    }
}
