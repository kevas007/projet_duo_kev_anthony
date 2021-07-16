<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function create(){
        return view('pages.portfolio');
    }
    public function store(Request $request){
        $store = new Blog;
        $store->blog_image	 = $request->blog_image;
        $store->blog_titre = $request->blog_titre;
        $store->blog_paragraphe = $request->blog_paragraphe;
        $store->save();
        return redirect('/pages.backOffice.homeStatic');
    }}
