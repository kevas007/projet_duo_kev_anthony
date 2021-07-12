<?php

namespace App\Http\Controllers;

use App\Models\HomeDynamiques;
use Illuminate\Http\Request;

class HomeDynamiquesController extends Controller
{

    public function create(){
        return view('indexBack');
    }

    public function store(Request $request){
        $store = new HomeDynamiques;
        $store->i1_service = $request->i1_service;
        $store->h4_1_service = $request->h4_1_service;
        $store->p1_service = $request->p1_service;
        $store->save();
        return redirect('/');
    }
}
