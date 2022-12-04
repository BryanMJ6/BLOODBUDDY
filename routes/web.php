<?php

use App\Http\Controllers\UserAjustesController;

use Illuminate\Support\Facades\Route;

/**Esta es la ruta de inicio la cual se llama Welcomeblade**/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    /**'verify'=>true/** */
]);

Route::get('/NewPassword',  [UserAjustesController::class, 'NewPassword'])->name('NewPassword')->middleware('auth',/*verified'/** */);
Route::post('/change/password',  [UserAjustesController::class, 'changePassword'])->name('changePassword');



/**Esta es la ruta de nuestro ChatBot**/
/**Esta llama a la funcion handle que esta dentro de el controlador BotmanController
 * el cual tiene todo el chat de nuestro chatbot**/
Route::match(['get', 'post'], '/botman', [\App\Http\Controllers\BotmanController::class, 'handle']);

/**Esta es la ruta de nuestra seccion de contactos**/
/**es de tipo resource ya que esta dentro de una carpeta llamada contactos**/
Route::resource('contactos', App\Http\Controllers\ContactosController::class);

/**Esta es la ruta de nuestra seccion de Ayuda**/
/**es de tipo resource ya que esta dentro de una carpeta llamada contactos**/
Route::resource('ayudas', App\Http\Controllers\AyudasController::class);

/**Esta es la ruta de nuestra seccion de Nosotros**/
/**es de tipo resource ya que esta dentro de una carpeta llamada equipos**/
Route::resource('equipos', App\Http\Controllers\EquiposController::class);

/**Esta es la ruta de nuestra seccion de Terminos**/
/**es de tipo resource ya que esta dentro de una carpeta llamada terminos**/
Route::resource('terminos', App\Http\Controllers\TerminosController::class);

/**Esta es la ruta de nuestra seccion de Mas Informacion**/
/**es de tipo resource ya que esta dentro de una carpeta llamada informacion**/
Route::resource('extras', App\Http\Controllers\ExtraController::class);

/**Esta es la ruta de nuestro formulario de donantes**/
/**es de tipo resource ya que esta dentro de una carpeta llamada donantes**/
Route::resource('donantes', App\Http\Controllers\DonanteController::class)->middleware(
    'auth'
    /**'verified'**/
);

/**Esta es la ruta de Home que se nos muestra al Iniciar Sesion */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/**->middleware('auth','verified')/** */