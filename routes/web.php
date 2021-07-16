<?php

use App\Http\Controllers\HomeDynamiquesController;
use App\Http\Controllers\HomeStaticsController;
use App\Models\ContacStatics;
use App\Models\HomeDynamiques;
use App\Models\HomeStatics;
use App\Models\Portfolios;
use App\Models\PortofolioStatiques;
use App\Models\Blog;
use App\Models\BlogStatique
;
use Illuminate\Support\Facades\DB;
use App\Models\navBar;
use App\Models\footer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//anthony
Route::get('/', function () {
    $homeStatics = HomeStatics::all();
    $homeDynamiques =HomeDynamiques::all();
    $navs = navBar:: all();
    $footers = footer::all();
    return view('index', compact('homeStatics', "homeDynamiques", 'navs','footers'));
});

Route::get('/contact', function () {
    $contacStatics = ContacStatics::all();
    $navs = navBar:: all();
    $footers = footer::all();
    return view('pages.contact', compact('contacStatics', 'navs','footers'));
})->name('contact');


Route::get('/portfolio', function () {
    $portfolios = DB::table('portfolios')
    ->take(15)//put limite
    ->get();// get the limit
    $PortofolioS2 = PortofolioStatiques::all();
    return view('pages.portfolio',compact('portfolios','PortofolioS2'));
});


Route::get('/blog', function () {
    $blog = DB::table('blogs')
    ->take(4)
    ->get();
    $blog2 = BlogStatique::all();
    return view('pages.blog',compact('blog','blog2'));
});

Route::get('/backoffice', function () {
    $homeStatics = HomeStatics::all();
    $homeDynamiques =HomeDynamiques::all();
    return view('indexBack', compact('homeStatics', "homeDynamiques"));
});

Route::get('/dynamiques',[HomeDynamiquesController ::class,'create']);
Route::post('/newdynamiques',[HomeDynamiquesController ::class,'store']);
Route::get('/static',[HomeStaticsController ::class,'create']);
Route::post('/newstatic',[HomeStaticsController ::class,'store']);
Route::delete("/dynamiques/{id}/delete", [HomeDynamiquesController::class, "destroy"]);
