<?php

use App\Http\Controllers\HomeDynamiquesController;
use App\Http\Controllers\HomeStaticsController;
use App\Models\ContacStatics;
use App\Models\HomeDynamiques;
use App\Models\HomeStatics;
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

Route::get('/', function () {
    $homeStatics = HomeStatics::all();
    $homeDynamiques =HomeDynamiques::all();
    $navs = navBar:: all();
    $footers = footer::all();

    return view('/index', compact('homeStatics', "homeDynamiques", 'navs','footers'));
});

Route::get('/contact', function () {
    $contacStatics = ContacStatics::all();
    $navs = navBar:: all();
    $footers = footer::all();
    return view('pages.contact', compact('contacStatics', 'navs','footers'));
})->name('contact');


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
