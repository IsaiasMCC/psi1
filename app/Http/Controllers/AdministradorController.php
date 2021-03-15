<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Administrador;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdministradorController extends Controller
{
    public function index()
    {
        $administradores=Administrador::join('personas','personas.id','=','administradores.persona_id')
        ->select('administradores.*','personas.nombre','personas.apellido','personas.correo')
        ->get();
        return view('administradores.index', compact('administradores')); 
    }

    public function create()
    {
        return view('administradores.create');
    }
    
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'nombre' => ['required', 'string', 'max:255'],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:personas'],
            'password' => ['required'],
            'apellido' =>  ['required'],
            'carnet_identidad' =>  ['required'],
            'telefono' =>  ['required'],
            'tipo_administrador' =>  ['required']
        ]);
        if(!$validator->fails()) {
            
            $persona = Persona::create([
                'nombre' => $request['nombre'],
                'apellido' => $request['apellido'],
                'fecha_nacimiento' => Carbon::now('America/La_Paz')->toDateString(),
                'carnet_identidad' => $request['carnet_identidad'],
                'correo' => $request['correo'],
                'telefono' => $request['telefono'],
            ]);
            
            $user = User::create([
                'name' => $request['nombre'],
                'email' => $request['correo'],
                'password' => Hash::make($request['password']),
                'persona_id' => $persona->id,
            ]);

            $administrador = Administrador::create([
                'tipo_administrador' => $request['tipo_administrador'],
                'persona_id' => $persona->id,
            ]); 
            return redirect()->route('administradores.show', $administrador->id)->with('success', 'Administrador creado correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(Administrador $administrador)
    {
        $administrador=Administrador::select('administradores.*','personas.nombre','personas.apellido','personas.fecha_nacimiento','personas.carnet_identidad','personas.correo','personas.telefono')
            ->join('personas','personas.id','=','administradores.persona_id')
            ->where('administradores.id',$administrador['id'])
            ->first();
        return view('administradores.show', compact('administrador'));
    }

    public function edit(Administrador $administrador)
    {
        return view('administradores.edit', compact('administrador'));
    }
    
    public function update(Request $request, Administrador $administrador)
    {

        $validator=Validator::make($request->all(), [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' =>  ['required'],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:personas'],
            'carnet_identidad' =>  ['required'],
            'telefono' =>  ['required'],
            'tipo_administrador' =>  ['required']
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $data = $request->only('nombre', 'apellido','correo','carnet_identidad','telefono', 'tipo_administrador');
        $password=$request->input('password');
        if($password)
            $data['password'] = bcrypt($password);
        $administrador->join('personas','personas.id','=','administradores.persona_id')
        ->join('users','users.persona_id','=','personas.id')
        ->update($data);
        return redirect()->route('administradores.show', $administrador->id)->with('success', 'Administrador actualizado correctamente');
    }

    public function destroy(Administrador $administrador)
    {
        $administrador->delete();
        return back()->with('success','administrador eliminado correctamente');
    }

}
