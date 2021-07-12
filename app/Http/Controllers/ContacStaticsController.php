<?php

namespace App\Http\Controllers;

use App\Models\ContacStatics;
use Illuminate\Http\Request;

class ContacStaticsController extends Controller
{
    public function store(Request $request){
        $store = new ContacStatics;
        $store->titreContac = $request->titreContac;
        $store->sous_titreContact = $request->sous_titreContact;
        $store->paraContact = $request->paraContact;
        $store-> name = $request->name;
        $store->phone= $request->phone;
        $store->fax = $request->fax;
        $store->email = $request->email;
        $store->save();
        return redirect('/');
    }
}
