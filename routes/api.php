<?php

use App\Http\Controllers\Api\AdvertismentsController;
use App\Http\Controllers\Api\ApartmentsController;
use App\Http\Controllers\Api\GroupsController;
use App\Http\Controllers\Api\RolesController;
use App\Http\Controllers\Api\ServicesController;
use App\Http\Controllers\Api\UsersController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


/// User Routes ////////////////////////////////////

Route::get('/users/showall',[UsersController::class,'showall']);
Route::get('/users/create',[UsersController::class,'create']);
Route::post('/users/store',[UsersController::class,'store']);
Route::get('/users/edit/{id}',[UsersController::class,'edit']);
Route::put('/users/update/{id}',[UsersController::class,'update']);
Route::delete('/users/delete/{id}',[UsersController::class,'delete']);


//// end of User Routes //////////////////////////////////


/// Role Routes ////////////////////////////////////

Route::get('/roles/showall',[RolesController::class,'showall']);
// Route::get('/roles/create',[RolesController::class,'create']);
Route::post('/roles/store',[RolesController::class,'store']);
Route::get('/roles/edit/{id}',[RolesController::class,'edit']);
Route::put('/roles/update/{id}',[RolesController::class,'update']);
Route::delete('/roles/delete/{id}',[RolesController::class,'delete']);


//// end of Role Routes //////////////////////////////////


/// Group Routes ////////////////////////////////////

Route::get('/groups/showall',[GroupsController::class,'showall']);
// Route::get('/groups/create',[GroupsController::class,'create']);
Route::post('/groups/store',[GroupsController::class,'store']);
Route::get('/groups/edit/{id}',[GroupsController::class,'edit']);
Route::put('/groups/update/{id}',[GroupsController::class,'update']);
Route::delete('/groups/delete/{id}',[GroupsController::class,'delete']);


//// end of Group Routes //////////////////////////////////


/// Apartments Routes ////////////////////////////////////

Route::get('/apt/showall',[ApartmentsController::class,'showall']);
Route::get('/apt/create',[ApartmentsController::class,'create']);
Route::post('/apt/store',[ApartmentsController::class,'store']);
Route::get('/apt/edit/{id}',[ApartmentsController::class,'edit']);
Route::put('/apt/update/{id}',[ApartmentsController::class,'update']);
Route::delete('/apt/delete/{id}',[ApartmentsController::class,'delete']);


//// end of Apartments Routes //////////////////////////////////


/// Service Routes ////////////////////////////////////

Route::get('/service/showall',[ServicesController::class,'showall']);
Route::get('/service/create',[ServicesController::class,'create']);
Route::post('/service/store',[ServicesController::class,'store']);
Route::get('/service/edit/{id}',[ServicesController::class,'edit']);
Route::put('/service/update/{id}',[ServicesController::class,'update']);
Route::delete('/service/delete/{id}',[ServicesController::class,'delete']);


//// end of Service Routes //////////////////////////////////


/// Advertisments Routes ////////////////////////////////////

Route::get('/ads/showall',[AdvertismentsController::class,'showall']);
Route::get('/ads/create',[AdvertismentsController::class,'create']);
Route::post('/ads/store',[AdvertismentsController::class,'store']);
Route::get('/ads/edit/{id}',[AdvertismentsController::class,'edit']);
Route::put('/ads/update{id}',[AdvertismentsController::class,'update']);
Route::delete('/ads/delete/{id}',[AdvertismentsController::class,'delete']);


//// end of Advertisments Routes //////////////////////////////////



