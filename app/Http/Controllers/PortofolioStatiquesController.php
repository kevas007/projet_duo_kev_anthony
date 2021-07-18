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
    public function edit($id){
        $edit = PortofolioStatiques::find($id);
        return view('pages.backOffice.editPortfolio.porfolioStatique',compact('edit'));
    }
    public function destroy($id){
        $destroy = PortofolioStatiques::find($id);
        $destroy->delete();
        return redirect("/");
    }
    public function update($id, Request $request){
        $update = PortofolioStatiques::find($id);
        $update->titre = $request->titre;
        $update->para = $request->titre_section;
        $update->lein = $request->titre_btn;
        $update->save();
        return redirect('/backoffice');
    }
    public function show($id)
    {
        $show =PortofolioStatiques::find($id);
        return view('pages.backOffice.showPortfolio.showStatique', compact('show'));
    }
}
