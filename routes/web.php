<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
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

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');

//es importante el orden del las rutas 

//se podra evitar lo ultimo para segui la convencion en ingles
Route::resource('portafolio', ProjectController::class)
->names('projects')
->parameters(['portafolio' => 'project']);
/* Route::get('/portfolio',[ProjectController::class,'index'])->name('projects.index');
Route::get('/portfolio/crear',[ProjectController::class, 'create'])->name('projects.create');
Route::get('/portfolio/{project}/editar',[ProjectController::class, 'edit'])->name('projects.edit');
Route::post('/portfolio/crear',[ProjectController::class, 'store'])->name('projects.store');
Route::patch('/portfolio/{project}',[ProjectController::class, 'update'])->name('projects.update');
Route::get('/portfolio/{project}',[ProjectController::class, 'show'])->name('projects.show');
Route::delete('/portfolio/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy'); */




Route::view('/contact','contact')->name('contact');

Route::post('contact',[MessageController::class, 'store'])->name('message.store'); 

Auth::routes(['register' => false]);


//Lo middlewares filtrean la peticiones http que realiza nuestra aplicacion, en este caso intercepta la peticion del usuario para verificar si esta autenticado o no 
