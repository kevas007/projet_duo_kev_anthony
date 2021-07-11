<?php

namespace App\Http\Controllers;

use App\Models\ContacDynamiques;
use Illuminate\Http\Request;

class ContacDynamiquesController extends Controller
{
    public function store(Request $request){
        $store = new ContacDynamiques;
        $store-> li_1_Contact = $request-> li_1_Contact;
        $store-> li_2_Contact = $request-> li_2_Contact;
        $store-> li_3_Contact = $request-> li_3_Contact;
        $store-> li_4_Contact = $request-> li_4_contact;
        $store->save();
        return redirect('/');
    }
}
