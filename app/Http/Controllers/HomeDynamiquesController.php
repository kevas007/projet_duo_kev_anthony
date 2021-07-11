<?php

namespace App\Http\Controllers;

use App\Models\HomeDynamiques;
use Illuminate\Http\Request;

class HomeDynamiquesController extends Controller
{

    public function create(){
        return view('pages.backOffice.homedynamiques');
    }

    public function store(Request $request){
        $store = new HomeDynamiques;
        $store->h4_1_service = $request->h4_1_service;
        $store->p1_service = $request->p1_service;
        $store->h4_2_service = $request->h4_2_service;
        $store->p2_service = $request->p2_service;
        $store->h4_3_service = $request->h4_3_service;
        $store->p3_service = $request->p3_service;
        $store->h4_4_service = $request->h4_4_service;
        $store->p4_service = $request->p4_service;
        $store->save();
        return redirect('/pages.backOffice.homedynamiques');
    }
}
