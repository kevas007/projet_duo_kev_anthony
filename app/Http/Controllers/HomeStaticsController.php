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
        $store->titreHome = $request->titreHome;
        $store->para1 = $request->para1;
        $store->para2  = $request->para2;
        $store->img = $request->img;
        $store->sous_titre1 = $request->sous_titre1;
        $store->para3 = $request->para3;
        $store->ahref = $request->ahref;
        $store->sous_titre2 = $request->sous_titre2;
        $store->para4 = $request->para4;
        $store->para5 = $request->para5;
        $store->ahref2 = $request->ahref2;
        $store->save();
        return redirect('/');
    }
}
