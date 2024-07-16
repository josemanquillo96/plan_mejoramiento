<?php
namespace App\Http\Controllers;// aca pego lo del controlador

use App\Models\Player;
use App\Models\President;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('jugador/listar',[PlayerController::class,'listar'])->name('player.listar');//primero coloco la direccion; cambia el controllador  y donde va EL NAME coloco en nombre del conrolador y despues va la funcion  
Route::get('jugador/create',[PlayerController::class,'create'])->name('player.create');
Route::post('jugador/store', [PlayerController::class,'store'])->name('player.store');
Route::get('jugador/{player}', [PlayerController::class, 'show'])->name('player.show');
Route::put('jugador/{player}',[PlayerController::class,'update'])->name('player.update');
Route::get('jugador/{player}/editar',[PlayerController::class,'edit'])->name('player.edit');//dentro de esa llaves va en singular 
Route::delete('jugador/{player}',[PlayerController::class,'destroy'])->name('player.destroy');

Route::get('equipo/listar',[TeamController::class,'listar'])->name('team.listar');  
Route::get('equipo/create',[TeamController::class,'create'])->name('team.create');
Route::post('equipo/store', [TeamController::class,'store'])->name('team.store');
Route::get('equipo/{team}', [TeamController::class, 'show'])->name('team.show');
Route::put('equipo/{team}',[TeamController::class,'update'])->name('team.update');
Route::get('equipo/{team}/editar',[TeamController::class,'edit'])->name('team.edit'); 
Route::delete('equipo/{team}',[TeamController::class,'destroy'])->name('team.destroy');


Route::get('president/integrar', [PresidentController::class, 'asociar']);
Route::post('presidente/store', [PresidentController::class, 'store'])->name('president.store');
