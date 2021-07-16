<?php

namespace App\Http\Controllers;

use App\Models\HomeStatics;
use Illuminate\Http\Request;

class HomeStaticsController extends Controller
{
    public function create(){
        return view('pages.backOffice.homeStatic');
    }
    public function store(Request $request){
        $store = new HomeStatics;
        $store->titre = $request->titre;
        $store->para = $request->para;
        $store->save();
        return redirect('/');
    }
}
