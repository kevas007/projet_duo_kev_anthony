<?php

use App\Http\Controllers\HomeDynamiquesController;
use App\Models\ContacDynamiques;
use App\Models\ContacStatics;
use App\Models\HomeDynamiques;
use App\Models\HomeStatics;
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

    return view('/index', compact('homeStatics', "homeDynamiques"));
});

Route::get('/contact', function () {
    $contacStatics = ContacStatics::all();
    $contacdynamiques = ContacDynamiques::all();
    return view('pages.contact', compact('contacStatics', 'contacdynamiques'));
})->name('contact');


Route::get('/portfolio', function () {
    return view('pages.portfolio');
});


Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/backoffice', function () {
    $homeStatics = HomeStatics::all();
    $homeDynamiques =HomeDynamiques::all();
    return view('indexBack', compact('homeStatics', "homeDynamiques"));
});

Route::get('/dynamiques',[HomeDynamiquesController ::class,'create']);
Route::post('/newdynamiques',[HomeDynamiquesController ::class,'store']);
