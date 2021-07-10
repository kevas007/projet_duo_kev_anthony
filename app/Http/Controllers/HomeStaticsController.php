<?php

namespace App\Http\Controllers;

use App\Models\HomeStatics;
use Illuminate\Http\Request;

class HomeStaticsController extends Controller
{
    public function store(Request $request){
        $store = new HomeStatics;
        $store->titreHome = $request->titreHome;
        $store->para1 = $request->para1;
        $store->para2 = $request->para2;
        $store->sous_titre1 = $request->sous_titre1;
        $store->para3 = $request->para3;
        $store->ahref = $request->ahref;
        $store->sous_titre2 = $request->sous_titre2;
        $store->para4 = $request->para4;
        $store->titreBlog = $request->titreBlog;
        $store->sous_titreBlog = $request->sous_titreBlog;
        $store->paraBlog = $request->paraBlog;
        $store->titrePortfolio = $request->titrePortfolio;
        $store->sous_titrePortfolio = $request->sous_titrePortfolio;
        $store->btn_sousTitre = $request->btn_sousTitre;
        $store->titreContact = $request->titreContact;
        $store->sous_titreContact = $request->sous_titreContact;
        $store->paraContact = $request->paraContact;
        $store->companyName = $request->companyName;
        $store->phone = $request->phone;
        $store->fax = $request->fax;
        $store->email = $request->email;
        $store->save();
        return redirect('/');
    }
}
