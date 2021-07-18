<?php

namespace App\Http\Controllers;

use App\Models\ContacStatics;
use Illuminate\Http\Request;

class ContacStaticsController extends Controller
{
    public function store(Request $request){
        $store = new ContacStatics;
        $store->name = $request->name;
        $store->phone= $request->phone;
        $store->fax = $request->fax;
        $store->email = $request->email;
        $store->save();
        return redirect('/');
    }
    public function create()
    {
        return view('pages.backOffice.contactBack');
    }

    public function show($id)
    {
        $show =  ContacStatics::find($id);
        return view('pages.backOffice.showHome.show5', compact('show'));
    }
    public function edit( $id)
    {
        $edit =  ContacStatics::find($id);
        return view('pages.backOffice.editsta.edit6',compact('edit'));
    }
    public function update($id,Request $request)
    {
        $update = ContacStatics::find($id);
        $update->titreContact = $request->titreContact;
        $update->sous_titreContact = $request->sous_titreContact;
        $update->paraContact = $request->paraContact;
        $update->save();
        return redirect('/backoffice/contact');
    }
    public function destroy( $id)
    {
        $destroy = ContacStatics::find($id);
        $destroy->delete();
        return redirect("/");
    }
}
