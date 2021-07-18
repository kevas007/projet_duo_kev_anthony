<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function create(){
        return view('pages.portfolio');
    }

    public function edit($id){
        $edit = Blog::find($id);
        return view('pages.backOffice.editBlog.blog',compact('edit'));
    }
    public function show($id){
        $show = Blog::find($id);
        return view('pages.backOffice.showBlog.show',compact('show'));
    }

    public function update($id, Request $request){
        $update = Blog::find($id);
        $update->blog_image = $request->blog_image;
        $update->blog_titre = $request->blog_titre;
        $update->blog_paragraphe = $request->blog_paragraphe;
        $update->save();
        return redirect('/backoffice');
    }
    public function destroy($id){
        $destroy = Blog::find($id);
        $destroy->delete();
        return redirect("/");
    }
    public function store(Request $request){
        $store = new Blog;
        $store->blog_image	 = $request->blog_image;
        $store->blog_titre = $request->blog_titre;
        $store->blog_paragraphe = $request->blog_paragraphe;
        $store->save();
        return redirect('/backoffice/blog');
    }}
