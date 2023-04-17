<?php

use App\Http\Controllers\NomControleur;
use App\Http\Controllers\OneAction;
use App\Http\Controllers\Stagiaire;
use GuzzleHttp\Middleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('test', function () {
//     return 'hello laravel';
// });
// controleur de base php artisan make:controller NomControleur
// http://127.0.0.1:8000/meth1?age=20
// Route::get('/meth1', [NomControleur::class, 'methode1'])->Middleware('age');
// Route::get('/meth1', [NomControleur::class, 'methode1']);
// Route::get('/meth2', [NomControleur::class, 'methode2']);
// Route::get('/meth3', [NomControleur::class, 'methode3']);



// controleur invoke ==> php artisan make:controller OneAction -i 
// Route::get('/one', OneAction::class);
// Route::get('/one', [OneAction::class, '__invoke']);


// controlleur resours

// Route::resource('stagiaire', Stagiaire::class);
// http://127.0.0.1:8000/stagiaire  ==> index
// http://127.0.0.1:8000/stagiaire/create  ==>create or ...  ===> id parametre
// http://127.0.0.1:8000/stagiaire/50 ==> show
// http://127.0.0.1:8000/stagiaire/50/edit ===> execute edit and prev parametre


// pagination
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/layouts', function () {
//     return view('layouts.app');
// });

Route::get('/testDB','App\Http\Controllers\c2@getDataFromDB');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
