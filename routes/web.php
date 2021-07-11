<?php

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

    return view('index', compact('homeStatics', "homeDynamiques"));
});

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
