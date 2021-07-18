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
    public function show($id)
    {
        $show =IconeFooter::find($id);
        return view('pages.backOffice.showHome.show3', compact('show'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IconeFooter  $iconeFooter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = IconeFooter::find($id);
        return view('pages.backOffice.editsta.edit5',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IconeFooter  $iconeFooter
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $update =  IconeFooter::find($id);
        $update->i_1 = $request->i_1 ;
        $update->i_2 = $request->i_2;
        $update->i_3 = $request->i_3;
        $update->i_4= $request->i_4;
        $update->save();
        return redirect('/backoffice/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IconeFooter  $iconeFooter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = IconeFooter::find($id);
        $destroy->delete();
        return redirect("/");
    }
}
