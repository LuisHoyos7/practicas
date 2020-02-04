<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function __construct(){
        $this->middleware(['permission:read_users'])->only('index');
        $this->middleware(['permission:create_users'])->only('create');
        $this->middleware(['permission:update_users'])->only('edit');
        $this->middleware(['permission:delete_users'])->only('destroy');
    }

    public function index(Request $request){

        if ($request->rownumber == null){
            $request->rownumber=10;
        }

        $users = User::when($request->search, function ($q) use ($request) {
                                return $q->where('identificacion', 'ilike', '%' . $request->search . '%')
                                        ->orwhere('first_name', 'ilike', '%' . $request->search . '%')
                                        ->orwhere('last_name', 'ilike', '%' . $request->search . '%')
                                        ->orwhere('email', 'ilike', '%' . $request->search . '%');
                            })->latest()->paginate($request->rownumber);

        return view('users.index', compact('users'));
    }

    public function create(){
        $Roles = Role::all();
        return view('users.create', compact('Roles'));
    }

    public function store(Request $request){
        $request->validate([
            'identificacion'        => 'required|unique:users',
            'first_name'      => 'required',
            'last_name'      => 'required',
            'telefono'  => 'required',
            'direccion' => 'required',
            'email'     => 'required|unique:users',
            'password'  => 'required|confirmed',
            'rol'     => 'required|min:1',
        ]);

        $request_data = $request->except(['password', 'password_confirmation', 'rol']);
        $request_data['password'] = bcrypt($request->password);

        // Creando user
        $user = User::create($request_data);
        // rol
        $user->attachRole($request->rol);
        // Notificacion
        toastr()->success('¡Usuario creado con exito!');
        // Redireccion
        return redirect()->route('users.index');
    }

    public function show(User $user){
        echo "users show";
    }

    public function edit(User $user){
        $Roles = Role::all();
        return view('users.edit', compact('user', 'Roles'));
    }

    public function update(Request $request, User $user){

        $request->validate([
            'identificacion'    => ['required', Rule::unique('users')->ignore($user->id),],
            'first_name'        => 'required',
            'last_name'         => 'required',
            'telefono'  => 'required',
            'direccion' => 'required',
            'email'     => ['required', Rule::unique('users')->ignore($user->id),],
            'rol'     => 'required|min:1',
        ]);

        $request_data = $request->except(['rol']);

        $user->update($request_data);
        // Eliminamos el rol
        $user->detachRole($user->roles->first()->name);
        // Asignamos nuevo rol
        $user->attachRole($request->rol);
        // Notificacion
        toastr()->success('¡Usuario Actualizado con exito!');
        // Redireccion
        return redirect()->route('users.index');
    }

    public function destroy(User $user){
        echo "users destroy";
    }

}
