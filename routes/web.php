<?php

use App\Http\Livewire\AjouterVehicule;
use App\Http\Livewire\Index;
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


//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();


// Connection Pour Utilisateur ou Client avec un groupe
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
   
    Route::get('/',Index::class)->name('home');

    Route::get('/ajouter',AjouterVehicule::class)->name('ajouterVehicule');

});
