<?php

namespace App\Http\Controllers;
use App\Models\PortofolioStatiques;

use Illuminate\Http\Request;

class PortofolioStatiquesController extends Controller
{
    public function create(){
        return view('pages.portfolio');
    }
    public function store(Request $request){
        $store = new PortofolioStatiques;
        $store->titre = $request->titre;
        $store->titre_section = $request->titre_section;
        $store->titre_btn = $request->titre_btn;
        $store->save();
        return redirect('/');
    }
}
