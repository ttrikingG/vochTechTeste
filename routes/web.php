<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyAppController;
use App\Http\Controllers\ColabListController;
use App\Http\Controllers\CreateColabController;
use App\Http\Controllers\CreateUnitsController;
use App\Http\Controllers\RankingListController;
use App\Http\Controllers\ColabUnitListController;
use App\Http\Controllers\NotesColabController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/myApp', [MyAppController::class, 'index'])->name('myApp');
Route::get('/colabList', [ColabListController::class, 'index'])->name('colabList');
Route::get('/colabUnitList', [ColabUnitListController::class, 'index'])->name('colabUnitList');
Route::get('/rankingList', [RankingListController::class, 'index'])->name('rankingList');
Route::get('/createUnits', [CreateUnitsController::class, 'index'])->name('createUnits');
Route::get('/createColab', [CreateColabController::class, 'index'])->name('createColab');
Route::get('/notesColab', [NotesColabController::class, 'index'])->name('notesColab');
Route::get('/notesColab/edit/{user}', [NotesColabController::class, 'edit'])->name('notesColab.edit');

Route::post('/createUnits', [CreateUnitsController::class, 'store'])->name('createUnits.store');
Route::post('/createColab', [CreateColabController::class, 'store'])->name('createColab.store');

Route::put('/notesColab/{user}', [NotesColabController::class, 'update'])->name('notesColab.update');
