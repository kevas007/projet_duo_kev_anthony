<?php

namespace App\Http\Controllers;
use App\Models\Portfolios;
use Illuminate\Http\Request;

class portfolioController extends Controller

{

    public function create(){
        return view('pages.portfolio');
    }

    public function edit($id){
        $edit = Portfolios::find($id);
        return view('pages.backOffice.editPortfolio.portfolio',compact('edit'));
    }

    public function store(Request $request){
        $store = new Portfolios;
        $store->titre = $request->titre;
        $store->paragraphe = $request->paragraphe;
        $store->img = $request->img;
        $store->save();
        return redirect('/pages.backOffice.portfolio');
    }
    public function update($id, Request $request){
        $update = Portfolios::find($id);
        $update->titre = $request->titre;
        $update->paragraphe = $request->paragraphe;
        $update->img = $request->img;
        $update->save();
        return redirect('/backoffice');
    }
    public function show($id){
        $show = Portfolios::find($id);
        return view('backoffice.showPortfolio.show',compact('show'));
    }
    public function destroy($id){
        $destroy = Portfolios::find($id);
        $destroy->delete();
        return redirect("/");
    }

}
