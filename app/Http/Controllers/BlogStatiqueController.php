<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogStatique;
class BlogStatiqueController extends Controller
{
    public function create(){
        return view('pages.blog');
    }
    public function store(Request $request){
        $store = new BlogStatique;
        $store->blog_titre	 = $request->blog_titre;
        $store->blog_soutitre = $request->blog_soutitre;
        $store->save();
        return redirect('/');
    }
}
