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

Route::resource('preguntas', 'PreguntaController');
Route::get('preguntas/{formatopractica}/crear/formato', 'PreguntaController@create')->name('preguntas_create');
Route::get('preguntas/{formatopractica}/ver', 'PreguntaController@index')->name('preguntas_index');

Route::resource('preguntas_respuestas', 'PreguntaRespuestaController');

Route::resource('diarios', 'DiarioController');

Route::resource('grupos', 'GrupoController');

Route::resource('docentes', 'DocenteController');

Route::resource('colegios', 'ColegioController');

Route::resource('docentes-grupos', 'DocenteGrupoController');

Route::resource('inicio', 'InicioController');
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








