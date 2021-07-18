<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContacStaticsController;
use App\Http\Controllers\ContactTitreStaticController;
use App\Http\Controllers\HomeDynamiquesController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\HomeStaticsController;
use App\Http\Controllers\HomeTitreStatController;
use App\Http\Controllers\IconeFooterController;
use App\Http\Controllers\SectionHomeStaticController;
Route::delete("/titreStatic/{id}/delete", [HomeTitreStatController::class, "destroy"]);
Route::get('/ContactTitre/{id}/show', [ContactTitreStaticController::class, 'show']);
Route::get('/ContactTitre/{id}/edit', [ContactTitreStaticController::class, 'edit']);
Route::put('/ContactTitre/{id}/update', [ContactTitreStaticController::class, 'update']);
Route::get('/ContactTitre',[ContactTitreStaticController::class,'create']);
Route::post('/ContactTitre',[ContactTitreStaticController::class,'store']);
Route::delete("/ContactTitre/{id}/delete", [ContactTitreStaticController::class, "destroy"]);

Route::get('/Contact/{id}/show', [ContacStaticsController::class, 'show']);
Route::get('/Contact/{id}/edit', [ContacStaticsController::class, 'edit']);
Route::put('/Contact/{id}/update', [ContacStaticsController::class, 'update']);
Route::get('/Contact',[ContacStaticsController::class,'create']);
Route::post('/Contact',[ContacStaticsController::class,'store']);
Route::delete("/Contact/{id}/delete", [ContacStaticsController::class, "destroy"]);

Route::get('/SectionHome/{id}/show', [SectionHomeStaticController::class, 'show']);
Route::get('/SectionHome/{id}/edit', [SectionHomeStaticController::class, 'edit']);
Route::put('/SectionHome/{id}/update', [SectionHomeStaticController::class, 'update']);
Route::get('/SectionHome',[SectionHomeStaticController::class,'create']);
Route::post('/SectionHome',[SectionHomeStaticController::class,'store']);
Route::delete("/SectionHome/{id}/delete", [SectionHomeStaticController::class, "destroy"]);

Route::get('/titre/{id}/show', [TitreHomeStaticController::class, 'show']);
Route::get('/titre/{id}/edit', [TitreHomeStaticController::class, 'edit']);
Route::put('/titre/{id}/update', [TitreHomeStaticController::class, 'update']);
Route::get('/titre',[TitreHomeStaticController::class,'create']);
Route::post('/titre',[TitreHomeStaticController::class,'store']);
Route::delete("/titre/{id}/delete", [TitreHomeStaticController::class, "destroy"]);

Route::get('/icone/{id}/show', [IconeFooterController::class, 'show']);
Route::get('/icone/{id}/edit', [IconeFooterController::class, 'edit']);
Route::put('/icone/{id}/update', [IconeFooterController::class, 'update']);
Route::get('/icone',[IconeFooterController::class,'create']);
Route::post('/icone',[IconeFooterController::class,'store']);
Route::delete("/icone/{id}/delete", [IconeFooterController::class, "destroy"]);

Route::get('/static',[HomeStaticsController ::class,'create']);
Route::post('/newstatic',[HomeStaticsController ::class,'store']);
Route::delete("/dynamiques/{id}/delete", [HomeDynamiquesController::class, "destroy"]);

//portofolio

Route::delete("/portfolio/{id}/delete", [portfolioController::class, "destroy"]);
Route::get("/portfolio/{id}/show", [portfolioController::class, "show"]);
Route::put('/portfolio/{id}/update', [portfolioController::class, 'update']);
Route::get('/portfolio/{id}/edit', [portfolioController::class, 'edit']);
Route::post('/porto',[portfolioController::class,'store']);


Route::delete("/portfolioStatic/{id}/delete", [PortofolioStatiquesController::class, "destroy"]);
Route::get("/portfolioStatic/{id}/show", [PortofolioStatiquesController::class, "show"]);
Route::put('/portfolioStatic/{id}/update', [PortofolioStatiquesController::class, 'update']);
Route::get('/portfolioStatic/{id}/edit', [PortofolioStatiquesController::class, 'edit']);

Route::delete("/blog/{id}/delete", [BlogController::class, "destroy"]);
Route::get("/blog/{id}/show", [BlogController::class, "show"]);
Route::put('/blog/{id}/update', [BlogController::class, 'update']);
Route::get('/blog/{id}/edit', [BlogController::class, 'edit']);
Route::post('/blogRedirection',[BlogController::class,'store']);

Route::delete("/blogStatic/{id}/delete", [BlogStatiqueController::class, "destroy"]);
Route::get("/blogStatic/{id}/show", [BlogStatiqueController::class, "show"]);
Route::put('/blogStatic/{id}/update', [BlogStatiqueController::class, 'update']);
Route::get('/blogStatic/{id}/edit', [BlogStatiqueController::class, 'edit']);
// Route::resource('titreHomeStatic',TitreHomeStaticController::class);
