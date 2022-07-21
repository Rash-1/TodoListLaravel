<?php

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
Route::get('/' , [\App\Http\Controllers\TodoListController::class , 'home']) ;
Route::get('/todolists' , [\App\Http\Controllers\TodoListController::class , 'index']);
Route::get('/todolists/create' , [\App\Http\Controllers\TodoListController::class , 'create']);
Route::post('/todolists/store' , [\App\Http\Controllers\TodoListController::class , 'store']);
Route::post('/todolists/filter' , [\App\Http\Controllers\TodoListController::class , 'filter']);
Route::get('/todolists/{id}' , [\App\Http\Controllers\TodoListController::class , 'singlePage']);
Route::get('/todolists/{id}/edit' , [\App\Http\Controllers\TodoListController::class , 'edit']);
Route::patch('/todolists/{id}/update' , [\App\Http\Controllers\TodoListController::class , 'update']);
Route::patch('/todolists/{id}/done' , [\App\Http\Controllers\TodoListController::class , 'done']);
Route::delete('/todolists/{id}/delete' , [\App\Http\Controllers\TodoListController::class , 'delete']);


Route::get('/categories' , [\App\Http\Controllers\CategoryController::class , 'index']) ;
Route::get('/categories/create', [\App\Http\Controllers\CategoryController::class , 'create']);
Route::post('/categories/store' , [\App\Http\Controllers\CategoryController::class , 'store']) ;
Route::get('/categories/{id}/edit' , [\App\Http\Controllers\CategoryController::class , 'edit']) ;
Route::patch('/categories/{id}/update' , [\App\Http\Controllers\CategoryController::class , 'update']) ;
Route::delete('/categories/{id}/delete' , [\App\Http\Controllers\CategoryController::class , 'delete']) ;

