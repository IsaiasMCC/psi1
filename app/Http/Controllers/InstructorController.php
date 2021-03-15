<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Instructor;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class InstructorController extends Controller
{
    public function index()
    {
        $instructores=Instructor::join('personas','personas.id','=','instructores.persona_id')
        ->select('instructores.*','personas.nombre','personas.apellido','personas.correo')
        ->get();
        return view('instructores.index', compact('instructores'));   
    }

    public function create()
    {
        return view('instructores.create');
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' =>  ['required'],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:personas'],
            'carnet_identidad' =>  ['required'],
            'telefono' =>  ['required'],
            'tipo_instructor' =>  ['required']
        ]);
        if(!$validator->fails()) {

            $persona = Persona::create([
                'nombre' => $request['nombre'],
                'apellido' => $request['apellido'],
                'fecha_nacimiento' =>  Carbon::now('America/La_Paz')->toDateString(),
                'carnet_identidad' => $request['carnet_identidad'],
                'correo' => $request['correo'],
                'telefono' => $request['telefono'],
            ]);
            
            $instructor = Instructor::create([
                'tipo_instructor' => $request['tipo_instructor'],
                'persona_id' => $persona->id,
            ]); 
            
            return redirect()->route('instructores.index', $instructor->id)->with('success', 'Instructor creado correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(Instructor $instructor)
    {
        $instructor=Instructor::select('instructores.*','personas.nombre','personas.apellido','personas.fecha_nacimiento','personas.carnet_identidad','personas.correo','personas.telefono')
            ->join('personas','personas.id','=','instructores.persona_id')
            ->where('instructores.id',$instructor['id'])
            ->first();
        return view('instructores.show', compact('instructor'));
    }

    public function edit(Instructor $instructor)
    {
        return view('instructores.edit', compact('instructor'));
    }
    
    public function update(Request $request, Instructor $instructor)
    {   
        $validator=Validator::make($request->all(), [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' =>  ['required'],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:personas'],
            'carnet_identidad' =>  ['required'],
            'telefono' =>  ['required'],
            'tipo_instructor' =>  ['required']
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        
        $data = $request->only('nombre','apellido','correo','carnet_identidad','telefono','tipo_instructor');
        
        $instructor->join('personas','personas.id','=','instructores.persona_id')->update($data);
        return redirect()->route('instructores.index', $instructor->id)->with('success', 'Instructor actualizado correctamente');
    }

    public function destroy(Instructor $instructor)
    {
        $instructor->delete();
        return back()->with('success','Instructor eliminado correctamente');
    }
}
