<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Area;
use App\Cargo;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('usuarios.index', compact('users'));
    }

    public function create()
    {
        $roles      = Role::all()->pluck('name', 'id');
        $areas      = Area::where('status','1')->orderBy('nombre','asc')->get();
        $cargos     = Cargo::where('status','1')->orderBy('nombre','asc')->get();

        return view('usuarios.create', compact('roles','areas','cargos'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'password'  => 'required',
            'username'     => 'required|unique:users,username',
        ],[
            'name.required' => 'El Nombre y apellido es requerido.',
            'username.required' => 'El Nombre de usuario es requerido.',
            'password.required' => 'La Contraseña es requerida.',
        ]);

        $usuario = User::create($request->all());
        $usuario->password = bcrypt($request->password);

        if ($usuario->save()) {
          // asignar el rol
          $usuario->assignRole($request->rol);

          return redirect('/usuarios')->with('message', __('panel.dataSaved'));
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $id         = decrypt($id);
        $usuario    = User::findOrFail($id);
        $roles      = Role::all()->pluck('name', 'id');
        $areas      = Area::where('status','1')->orderBy('nombre','asc')->get();
        $cargos     = Cargo::where('status','1')->orderBy('nombre','asc')->get();

        return view('usuarios.edit', compact('usuario', 'roles','areas','cargos'));
    }

    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $usuario = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $id,
        ],[
            'name.required' => 'El Nombre y apellido es requerido.',
            'username.required' => 'El Nombre de usuario es requerido.',
            'username.unique' => 'El Nombre de usuario ya se encuentra registrado.'
        ]);
        $usuario->update($request->except(['password']));
        if ($request->password != null) {
            $usuario->password = bcrypt($request->password);
        }
        $usuario->syncRoles([$request->rol]);
        $usuario->save();

        return redirect('/usuarios')->with('message', __('panel.dataSaved'));
    }

    public function destroy($id)
    {
        $id = decrypt($id);
        $usuario = User::findOrFail($id);

        $usuario->removeRole($usuario->roles->implode('name', ', '));

        if ($usuario->delete()) {
            return redirect('/usuarios')->with('message', __('panel.dataDeleted'));
        }

        return response()->json([
            'mensaje' => 'Error al eliminar el usuario.'
        ]);
    }

    public function profileEdit($id){
        $id = decrypt($id);
        $user = User::findOrFail($id);

        return view('user.edit', compact('user'));
    }

    public function profileUpdate(Request $request, $id)
    {
        $id = decrypt($id);
        $usuario = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $id
        ],[
            'name.required' => 'El Nombre y apellido es requerido.',
            'username.required' => 'El Nombre de usuario es requerido.',
            'username.unique' => 'El Nombre de usuario ya se encuentra registrado.'
        ]);
        $usuario->update($request->except(['password']));
        if ($request->password != null) {
            $usuario->password = bcrypt($request->password);
        }
        $usuario->save();

        return redirect()->back()->with('message','Datos guardados con exito.');
    }
}
