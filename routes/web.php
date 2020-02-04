<?php


Route::get('/', function () {
    return view('home.inicio');
});

Auth::routes();

Route::middleware(['auth'])->group(function(){

Route::get('/index', 'HomeController@index')->name('home');

/* Routes INICIO USERS */
 Route::resource('users', 'UserController');
/* Routes FIN USERS */

//RUTA PRacticas
Route::resource('practicas', 'PracticaPedagogicaController');


Route::resource('formatos', 'FormatoPracticaController');
Route::get('formatos/{practica}/ver', 'FormatoPracticaController@index')->name('formatos_index');

});

// RUTA DE PRUEBA
Route::get('/spdf', 'EjemploController@pdf')->name('spdf');
Route::post('/upload', 'EjemploController@subir');
Route::get('/form', 'EjemploController@form');
//FIN RUTA DE PRUEBA

//RUTA PREINSCRIPCION
Route::resource('inscripciones', 'InscripcionController');
Route::resource('estudiantes', 'EstudianteController');
Route::get('inscripciones/aprobar/{inscripcion}/', 'InscripcionController@aprobarInscripcion')->name('aprobar_inscripcion');








