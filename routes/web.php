<?php

use Illuminate\Support\Facades\Route;
//especificar el uso --> traer de su Controller eñ namespace y adicionar
use App\Http\Controllers\HiveController;
use App\Http\Controllers\BeeController;

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

Route::get('bees', [BeeController::class,'index']);

Route::get('bees/apiary', [BeeController::class,'create']);

Route::get('bees/{specialty}', [BeeController::class,'show']);

/* //  ?  es opcional
Route::get('bees/{specialty}/{weather?}', function ($specialty, $weather = null) {
    if($weather){
        return "pagina para distribucion $specialty de las abejas por $weather";
    }else{
        return "pagina para distribucion $specialty de las abejas";
    }
}); */



