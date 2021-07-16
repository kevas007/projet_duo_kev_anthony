<?php

namespace App\Http\Controllers;

use App\Models\SectionHomeStatic;
use Illuminate\Http\Request;

class SectionHomeStaticController extends Controller
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
        $store = new SectionHomeStatic ;
        $store->image= $request->image;
        $store->titre= $request->titre;
        $store->para= $request->para;
        $store->lien= $request->lien;
        $store->save;
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SectionHomeStatic  $sectionHomeStatic
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $show =SectionHomeStatic::find($id);
        return view('pages.backOffice.staticHomeShow.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectionHomeStatic  $sectionHomeStatic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = SectionHomeStatic::find($id);
        return view('pages.backOffice.editsta.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SectionHomeStatic  $sectionHomeStatic
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $update = SectionHomeStatic ::find($id);
        $update->image = $request->image;
        $update->titre = $request->titre;
        $update->para = $request->para;
        $update->lien = $request->lien;
        $update->save();
        return redirect('/backoffice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionHomeStatic  $sectionHomeStatic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = SectionHomeStatic ::find($id);
        $destroy->delete();
        return redirect("/");
    }
}
