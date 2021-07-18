<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogStatique;
class BlogStatiqueController extends Controller
{
    public function create(){
        return view('pages.blog');
    }
    public function edit($id){
        $edit = BlogStatique::find($id);
        return view('pages.backOffice.editBlog.blogStatic',compact('edit'));
    }
    public function destroy($id){
        $destroy = BlogStatique::find($id);
        $destroy->delete();
        return redirect("/");
    }
    public function update($id, Request $request){
        $update = BlogStatique::find($id);
        $update->blog_titre = $request->blog_titre;
        $update->blog_soutitre = $request->blog_soutitre;
        $update->save();
        return redirect('/backoffice');
    }
    public function store(Request $request){
        $store = new BlogStatique;
        $store->blog_titre	 = $request->blog_titre;
        $store->blog_soutitre = $request->blog_soutitre;
        $store->save();
        return redirect('/');
    }
    public function show($id){
        $show = BlogStatique::find($id);
        return view('pages.backOffice.showBlog.showStatic',compact('show'));
    }
}
