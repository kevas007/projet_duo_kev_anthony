<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function store(Request $request){
        $store = new footer;
        $store->i_1 = $request->i_1 ;
        $store->i_2 = $request->i_2 ;
        $store->i_3 = $request->i_3 ;
        $store->email = $request->email ;
        $store->titre1 = $request->titre1 ;
        $store->paragraphe = $request->paragraphe;
        $store->titre2= $request->titre2 ;
        $store->li_1 = $request->li_1 ;
        $store->li_2= $request->li_2 ;
        $store->li_3 = $request->li_3 ;
        $store->titre3 = $request->titre3 ;
        $store->li_4 = $request->li_4 ;
        $store->li_5 = $request->li_5 ;
        $store->li_6 = $request->li_6 ;
        $store->titre4 = $request->titre4 ;
        $store->li_8= $request->li_8 ;
        $store->li_9 = $request->li_9 ;
        $store->save();
        return redirect('/');
    }
}
