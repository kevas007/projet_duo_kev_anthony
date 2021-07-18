<?php

namespace App\Http\Controllers;
use App\Models\Portfolios;
use Illuminate\Http\Request;

class portfolioController extends Controller

{

    public function create(){
        return view('pages.portfolio');
    }
    public function store(Request $request){
        $store = new Portfolios;
        $store->titre = $request->titre;
        $store->paragraphe = $request->paragraphe;
        $store->img = $request->img;
        $store->save();
        return redirect('/pages.backOffice.homeStatic');
    }
}
