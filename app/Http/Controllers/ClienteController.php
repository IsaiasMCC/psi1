<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Cliente;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ClienteController extends Controller
{
    public function index()
    {
         $clientes=Cliente::join('personas','personas.id','=','clientes.persona_id')
        ->select('clientes.*','personas.nombre','personas.apellido','personas.correo')
        ->get();
        return view('clientes.index', compact('clientes'));   
     
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' =>  ['required'],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:personas'],
            'carnet_identidad' =>  ['required'],
            'telefono' =>  ['required'],
            'antiguedad' =>  ['required']
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
            
            $cliente = Cliente::create([
                'antiguedad' => $request['antiguedad'],
                'persona_id' => $persona->id,
            ]);   
            return redirect()->route('clientes.index', $cliente->id)->with('success', 'Cliente creado correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(Cliente $cliente)
    {
        $cliente=Cliente::select('clientes.*','personas.nombre','personas.apellido','personas.fecha_nacimiento','personas.carnet_identidad','personas.correo','personas.telefono')
            ->join('personas','personas.id','=','clientes.persona_id')
            ->where('clientes.id',$cliente['id'])
            ->first();
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }
    
    public function update(Request $request, Cliente $cliente)
    {
        $validator=Validator::make($request->all(), [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' =>  ['required'],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:personas'],
            'carnet_identidad' =>  ['required'],
            'telefono' =>  ['required'],
            'antiguedad' =>  ['required']
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        
        $data = $request->only('nombre', 'apellido','correo','carnet_identidad','telefono', 'antiguedad');
        
        $cliente->join('personas','personas.id','=','clientes.persona_id')->update($data);
        return redirect()->route('clientes.show', $cliente->id)->with('success', 'Cliente actualizado correctamente');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return back()->with('success','cliente eliminado correctamente');
    }
}
