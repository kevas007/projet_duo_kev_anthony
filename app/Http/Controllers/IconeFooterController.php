<?php

namespace App\Http\Controllers;

use App\Models\IconeFooter;
use Illuminate\Http\Request;

class IconeFooterController extends Controller
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
        $store = new IconeFooter;
        $store ->i_1 = $request->i_1;
        $store ->i_2 = $request->i_2;
        $store ->i_3 = $request->i_3;
        $store ->i_4 = $request->i_4;
        $store->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IconeFooter  $iconeFooter
     * @return \Illuminate\Http\Response
     */
    public function show(IconeFooter $iconeFooter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IconeFooter  $iconeFooter
     * @return \Illuminate\Http\Response
     */
    public function edit(IconeFooter $iconeFooter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IconeFooter  $iconeFooter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IconeFooter $iconeFooter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IconeFooter  $iconeFooter
     * @return \Illuminate\Http\Response
     */
    public function destroy(IconeFooter $iconeFooter)
    {
        //
    }
}
