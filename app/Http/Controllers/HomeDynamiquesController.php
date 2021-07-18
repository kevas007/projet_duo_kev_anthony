<?php

namespace App\Http\Controllers;

use App\Models\HomeDynamiques;
use Illuminate\Http\Request;

class HomeDynamiquesController extends Controller
{


    public function create(){
        return view('indexBack');
    }
    public function edit($id){
        $edit = HomeDynamiques::find($id);
        return view('pages.backOffice.editHome.edit',compact('edit'));
    }

    public function store(Request $request){
        $store = new HomeDynamiques;
        $store->i1_service = $request->i1_service;
        $store->h4_1_service = $request->h4_1_service;
        $store->p1_service = $request->p1_service;
        $store->save();
        return redirect('/');
    }
    public function destroy($id){
        $destroy = HomeDynamiques::find($id);
        $destroy->delete();
        return redirect("/");
    }
    public function show($id)
    {
        $show = HomeDynamiques::find($id);
        return view('pages.backOffice.showHome.show', compact('show'));
    }

    public function update($id, Request $request){
        $update = HomeDynamiques::find($id);
        $update->i1_service = $request->i1_service;
        $update->h4_1_service = $request->h4_1_service;
        $update->p1_service = $request->p1_service;
        $update->save();
        return redirect('/backoffice');
    }
}
