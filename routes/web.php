<?php

use Illuminate\Support\Facades\Route;
//especificar el uso --> traer de su Controller eñ namespace y adicionar
use App\Http\Controllers\HiveController;
use App\Http\Controllers\BeeController;

Route::get('/', HiveController::class);

Route::get('bees', [BeeController::class,'index']);

Route::get('bees/create', [BeeController::class,'create']);

Route::get('bees/{ekosystem}', [BeeController::class,'show']);

