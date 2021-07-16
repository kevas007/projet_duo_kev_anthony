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
        $store->lein = $request->lein;
        $store->save();
        return redirect('/');
    }
    public function edit($id){
        $edit = HomeStatics::find($id);
        return view('pages.backOffice.editsta.edit',compact('edit'));
    }
    public function destroy($id){
        $destroy = HomeStatics::find($id);
        $destroy->delete();
        return redirect("/");
    }
    public function update($id, Request $request){
        $update = HomeStatics::find($id);
        $update->titre = $request->titre;
        $update->para = $request->para;
        $update->lein = $request->lein;
        $update->save();
        return redirect('/backoffice');
    }
    public function show($id)
    {
        $show =HomeStatics::find($id);
        return view('pages.backOffice.staticHomeShow.show', compact('show'));
    }

}
