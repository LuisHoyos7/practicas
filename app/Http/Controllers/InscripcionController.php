<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscripcion;
use App\User;
use App\Estudiante;
use App\Semestre;
use App\Modalidad;
use App\TipoIdentificacion;
use App\Programa;
use App\Sede;
use App\Practica;

class InscripcionController extends Controller
{
   
    public function index()
    {
        $inscripciones = Inscripcion::paginate(5);

        return view ('inscripciones.index', compact('inscripciones'));
    }

    public function create()
    {
        $semestres              = Semestre::pluck('nombre', 'id');        
        $modalidades            = Modalidad::pluck('nombre', 'id');
        $tipo_identificaciones  = TipoIdentificacion::pluck('nombre', 'id');
        $programas              = Programa::pluck('nombre', 'id');
        $sedes                  = Sede::pluck('nombre','id');
        $practicas              = Practica::pluck('nombre','id');

        return view ('inscripciones.create',compact('semestres', 'modalidades', 'tipo_identificaciones', 'programas', 'sedes','practicas'));
    }

    public function store(Request $request)
    {   
        $request->validate(
            [
                'identificacion'=>'required|unique:inscripciones',
                'correo'=>'required|unique:inscripciones'
            ], 
            [
                'identificacion.required' => 'Ingrese la identificación',
                'identificacion.unique' => 'La identificacion ya existe',
                'correo.required' => 'Ingrese el correo electronico',
                'correo.unique' => 'este correo ya existe en la base de datos',
           ]);

        Inscripcion::create($request->all());
        
        toastr()->success('Pre Inscripcion Realizada con exito!');

        return view('home.inicio');
    }

    public function aprobarInscripcion(Inscripcion $inscripcion)
    {
        $userData = 
        [
            'identificacion'    => $inscripcion->identificacion,
            'first_name'        => $inscripcion->nombres,
            'last_name'         => $inscripcion->apellidos,
            'telefono'          => $inscripcion->celular,
            'direccion'         => $inscripcion->direccion,
            'email'             => $inscripcion->correo,
            'password' => bcrypt($inscripcion->identificacion)
        ];

        $user = User::create($userData);

        $user->attachRole('estudiante');
      

        $estudianteData = 
        [
            'user_id'                    => $user->id,
            'tipoidentificacion'         => $inscripcion->tipoidentificacion,
            'semestre'                   => $inscripcion->semestre,
            'practica'              => $inscripcion->practica,
            'ciudad'                   => $inscripcion->ciudad,
            'sede'                  => $inscripcion->sede,
            'modalidad'             => $inscripcion->modalidad,
            'programa'              => $inscripcion->programa
        ];
 
       
        $estudiante = Estudiante::create($estudianteData);

       // $m= new SendMailController();

       // $m->sendMail($user->email,'INSCRIPCION SATISFACTORIA');

        $inscripcion->inscrito=true;

        $inscripcion->update();

        toastr()->success('Estudiante Inscrito con exito');

        return redirect()->route('inscripciones.index');

    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
