<?php

use App\Http\Controllers\ContactTitreStaticController;
use App\Http\Controllers\HomeDynamiquesController;
use App\Http\Controllers\HomeStaticsController;
use App\Http\Controllers\HomeTitreStatController;
use App\Http\Controllers\TitreHomeStaticController;
use App\Models\ContacStatics;
use App\Models\ContactTitreStatic;
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
use App\Models\HomeTitreStat;
use App\Models\IconeFooter;
use App\Models\SectionHomeStatic;
use App\Models\TitreHomeStatic;
use App\Models\TitrePFooter;
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
    $icones = IconeFooter::all();
    $footers = footer::all();
    $homeTitreStats= HomeTitreStat::all();
    $sectionHomeStatics= SectionHomeStatic::all();
    return view('index', compact('homeStatics', "homeDynamiques", 'navs','footers',"icones","sectionHomeStatics","homeTitreStats"));
});

Route::get('/contact', function () {
    $contacStatics = ContacStatics::all();
    $navs = navBar:: all();
    $footers = footer::all();
    $icones = IconeFooter::all();
    $contacts = ContactTitreStatic::all();
    return view('pages.contact', compact('contacStatics',"icones",'navs','footers','contacts','icones'));
})->name('contact');


Route::get('/portfolio', function () {
    $portfolios = DB::table('portfolios')
    ->take(15)//put limite
    ->get();// get the limit
    $icones = IconeFooter::all();
    $PortofolioS2 = PortofolioStatiques::all();
    return view('pages.portfolio',compact('portfolios','icones','PortofolioS2'));
});


Route::get('/blog', function () {
    $blog = DB::table('blogs')
    ->take(4)
    ->get();
    $icones = IconeFooter::all();
    $blog2 = BlogStatique::all();
    return view('pages.blog',compact('blog','blog2',"icones",));
});

Route::get('/backoffice', function () {
    $homeStatics = HomeStatics::all();
    $homeDynamiques =HomeDynamiques::all();
    $homeTitreStats= HomeTitreStat::all();
    $homeTitres = TitreHomeStatic::all();
    $sectionHomeStatics= SectionHomeStatic::all();

    return view('indexBack', compact('homeStatics', "homeDynamiques","homeTitreStats","sectionHomeStatics", "homeTitres"));
});

Route::get('/backoffice/portfolio', function () {
    $portfolios = Portfolios::all();
    $portfolios2 = PortofolioStatiques::all();

    return view('pages.backOffice.portfolioBack',compact("portfolios","portfolios2"));
});


Route::get('/backoffice/contact', function () {
    $titres=ContactTitreStatic::all();
    return view('pages.backOffice.contactBack', compact("titres"));
});


Route::get('/backoffice/blog', function () {
    $blogs = Blog::all();
    $blog2 = BlogStatique::all();
    return view('pages.backOffice.blogBack',compact("blogs","blog2"));
});

Route::get('/dynamiques/{id}/show', [HomeDynamiquesController::class, 'show']);
Route::get('/dynamique/{id}/edit', [HomeDynamiquesController::class, 'edit']);
Route::put('/dynamique/{id}/update', [HomeDynamiquesController::class, 'update']);
Route::get('/dynamiques',[HomeDynamiquesController ::class,'create']);
Route::post('/newdynamiques',[HomeDynamiquesController ::class,'store']);

Route::get('/homeStatic/{id}/show', [HomeStaticsController::class, 'show']);
Route::get('/homeStatic/{id}/edit', [HomeStaticsController::class, 'edit']);
Route::put('/homeStatic/{id}/update', [HomeStaticsController::class, 'update']);
Route::get('/homeStatics',[HomeStaticsController ::class,'create']);
Route::post('/homeStatics',[HomeStaticsController ::class,'store']);

Route::get('/titreStatic/{id}/show', [HomeTitreStatController::class, 'show']);
Route::get('/titreStatic/{id}/edit', [HomeTitreStatController::class, 'edit']);
Route::put('/titreStatic/{id}/update', [HomeTitreStatController::class, 'update']);
Route::get('/titreStatic',[HomeTitreStatController::class,'create']);
Route::post('/titreStatic',[HomeTitreStatController::class,'store']);
Route::delete("/titreStatic/{id}/delete", [HomeTitreStatController::class, "destroy"]);

Route::get('/titre/{id}/show', [TitreHomeStaticController::class, 'show']);
Route::get('/titre/{id}/edit', [TitreHomeStaticController::class, 'edit']);
Route::put('/titre/{id}/update', [TitreHomeStaticController::class, 'update']);
Route::get('/titre',[TitreHomeStaticController::class,'create']);
Route::post('/titre',[TitreHomeStaticController::class,'store']);
Route::delete("/titre/{id}/delete", [TitreHomeStaticController::class, "destroy"]);

Route::get('/static',[HomeStaticsController ::class,'create']);
Route::post('/newstatic',[HomeStaticsController ::class,'store']);
Route::delete("/dynamiques/{id}/delete", [HomeDynamiquesController::class, "destroy"]);

// Route::resource('titreHomeStatic',TitreHomeStaticController::class);
