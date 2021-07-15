<?php

namespace App\Http\Controllers;

use App\Models\navBar;
use Illuminate\Http\Request;

class NavBarController extends Controller
{
    public function store(request $request){
        $store = new navBar;
        $store->lien1 = $request->lien1;
        $store->lien2 = $request->lien2;
        $store->lien3 = $request->lien3;
        $store->save;
        return redirect('/');
    }
}
