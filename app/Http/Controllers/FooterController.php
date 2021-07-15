<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function store(Request $request){
        $store = new footer;
        $store->paragraphe = $request->paragraphe;
        $store->save();
        return redirect('/');
    }
}
