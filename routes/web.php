<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\JudgeController;
use App\Http\Controllers\ContestantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/jca', [EventController::class, 'index'])->name('event.index');
Route::post('/jca/create', [EventController::class, 'store'])->name('event.create');
Route::delete('/jca/{event}/delete', [EventController::class, 'destroy'])->name('event.delete');


Route::get('/jca/{event}/show', [EventController::class, 'show'])->name('eventShow.show');

Route::post('/jca/judges/create', [JudgeController::class, 'store'])->name('judges.create');
Route::put('/jca/judges/{event}/{judge}/edit', [JudgeController::class, 'update'])->name('judge.edit');

Route::delete('/jca/judges/{event}/{judge}/delete', [JudgeController::class, 'destroy'])->name('judge.delete');


Route::post('/jca/contestant/create', [ContestantController::class, 'store'])->name('contestant.create');
Route::delete('/jca/contestant/{event}/{contestant}/delete', [ContestantController::class, 'destroy'])->name('contestant.delete');