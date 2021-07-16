<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function store(Request $request){
        $store = new footer;
        $store->titre1 = $request->titre1;
        $store->paragraphe = $request->paragraphe;
        $store->titre2 = $request->titre2;
        $store->phone = $request->phone;
        $store->fax = $request->fax;
        $store->email = $request->email;
        $store->titre3 = $request->titre3;
        $store->lien1 = $request->lien1;
        $store->lien2= $request->lien2;
        $store->lien3= $request->lien3;
        $store->titre4 = $request->titre4;
        $store->name = $request->name;
        $store->lieu = $request->lieu;
        $store->path = $request->path;
        $store->save();
        return redirect('/');
    }
}
