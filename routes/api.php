<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\TraitementsController;
use App\Http\Controllers\BilansController;
use App\Http\Controllers\AntecedentsController;
use App\Http\Controllers\AntecedentFamilliauxController;
use App\Http\Controllers\ConsultationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('patients', [PatientController::class, 'index']);

Route::get('patients/{patient}', [PatientController::class, 'show']);

Route::delete('patients/{patient}', [PatientController::class, 'destroy']);

Route::post('patients', [PatientController::class, 'store']);

Route::put('patients/{patient}', [PatientController::class, 'update']);


Route::get('traitements', [TraitementsController::class, 'index']);

Route::get('traitements/{traitement}', [TraitementsController::class, 'show']);

Route::delete('traitements/{traitement}', [TraitementsController::class, 'destroy']);

Route::post('traitements/{antecedent}', [TraitementsController::class, 'store']);

Route::put('traitements/{traitement}', [TraitementsController::class, 'update']);


Route::get('bilans', [BilansController::class, 'index']);

Route::get('bilans/{bilan}', [BilansController::class, 'show']);

Route::delete('bilans/{bilan}', [BilansController::class, 'destroy']);

Route::post('bilans/{patient}', [BilansController::class, 'store']);

Route::put('bilans/{bilan}', [BilansController::class, 'update']);


Route::get('consultations', [ConsultationController::class, 'index']);

Route::get('consultations/{consultation}', [ConsultationController::class, 'show']);

Route::delete('consultations/{consultation}', [ConsultationController::class, 'destroy']);

Route::post('consultations/{patient}', [ConsultationController::class, 'store']);

Route::put('consultations/{consultation}', [ConsultationController::class, 'update']);


Route::get('antecedents', [AntecedentsController::class, 'index']);

Route::get('antecedents/{antecedent}', [AntecedentsController::class, 'show']);

Route::delete('antecedents/{antecedent}', [AntecedentsController::class, 'destroy']);

Route::post('antecedents/{patient}', [AntecedentsController::class, 'store']);

Route::put('antecedents/{antecedent}', [AntecedentsController::class, 'update']);


Route::get('antecedent_familliauxs', [AntecedentFamilliauxController::class, 'index']);

Route::get('antecedent_familliauxs/{antecedent_familliaux}', [AntecedentFamilliauxController::class, 'show']);

Route::delete('antecedent_familliauxs/{antecedent_familliaux}', [AntecedentFamilliauxController::class, 'destroy']);

Route::post('antecedent_familliauxs/{patient}', [AntecedentFamilliauxController::class, 'store']);

Route::put('antecedent_familliauxs/{antecedent_familliaux}', [AntecedentFamilliauxController::class, 'update']);
;
