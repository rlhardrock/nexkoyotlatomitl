<?php

use Illuminate\Support\Facades\Route;

//especificar el uso --> traer de su Controller eñ namespace y adicionar
use App\Http\Controllers\HiveController;

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

Route::get('/', HiveController::class);

Route::get('bees', function () {
    return "pagina web en blanco para renderizar abejas" ;
});

Route::get('bees/apiary_create', function () {
    return "pagina con destino para crear ciber apiarios con formulario" ;
});

// variable, recibirla $ como parametro
Route::get('bees/{specialty}', function ($specialty) {
    return "pagina web en blanco para renderizar abejas $specialty" ;
});

//  ?  es opcional
Route::get('bees/{specialty}/{weather?}', function ($specialty, $weather = null) {
    if($weather){
        return "pagina para distribucion $specialty de las abejas por $weather";
    }else{
        return "pagina para distribucion $specialty de las abejas";
    }
});



