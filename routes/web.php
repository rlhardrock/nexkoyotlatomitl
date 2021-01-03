<?php

use Illuminate\Support\Facades\Route;
//especificar el uso --> traer de su Controller eñ namespace y adicionar
use App\Http\Controllers\HiveController;
use App\Http\Controllers\BeeController;

use App\Mail\SpectreMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', HiveController::class)->name('home');

/* Route::get('bees', [BeeController::class,'index'])->name('bees.index');

Route::get('bees/create', [BeeController::class,'create'])->name('bees.create');

Route::post('bees', [BeeController::class,'store'])->name('bees.store'); //Enlaze al formulario

Route::get('bees/{kbee}', [BeeController::class,'show'])->name('bees.show');

Route::get('bees/{kbee}/edit', [BeeController::class,'edit'])->name('bees.edit');

Route::put('bees/{kbee}', [BeeController::class,'update'])->name('bees.update'); //Actualizar al formulario

Route::delete('bees/{kbee}',[BeeController::class,'destroy'])->name('bees.destroy');
 */

Route::resource('bees', BeeController::class);
 /* construir al final de hacer todas las vistas o CRUD's */


Route::view('apitech', 'apitech')->name('apitech');
/* solo contenido estatico, sin acceso a BBDD */

Route::get('contact', function(){
    $correo = new SpectreMail;
})->name('apitech');
