<?php

namespace App\Http\Controllers;
use App\Models\Portfolios;
use Illuminate\Http\Request;

class portfolioController extends Controller

{

    public function create(){
        return view('page.portfolio');
    }
    public function store(Request $request){
        $store = new Portfolios;
        $store->titre_image = $request->titre_image;
        $store->para = $request->para;
        $store->save();
        return redirect('/pages.backOffice.homeStatic');
    }
}
