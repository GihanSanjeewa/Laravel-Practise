<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

//Home
Route::get('/',[HomeController::class,"index"]) -> name('home');

//Todo
Route::prefix('/todo')->group(function(){
    //this is the route for navigate the Todo Page
    Route::get('/',[TodoController::class,"index"]) -> name('todo');
    //this is the route for store data in databse 
    Route::post('/store',[TodoController::class,"store"]) -> name('todo.store');
    
    //this is the route for delete data from database 
    Route::get('/{task_id}/delete',[TodoController::class,"delete"]) -> name('todo.delete');
    /* inside the delete router we use this {task_id} 
    for the select what data will we delete*/

    Route::get('/{task_id}/done',[TodoController::class,"done"]) -> name('todo.done');
});

