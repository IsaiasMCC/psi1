<?php

namespace App\Http\Controllers;

use App\Models\BoletaInscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InscripcionController extends Controller
{
    public function index()
    {
       $inscripciones=BoletaInscripcion::paginate(5);
       return view('inscripciones.index', compact('inscripciones'));
    }

    public function create()
    {
        return view('inscripciones.create');
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'fecha_inscripcion' => ['required'],
            'fecha_inicio' => ['required'],
            'fecha_fin' => ['required'],
            'importe' => ['required'],
            'total' => ['required'],
            'descuento_id' => ['required'],
            'cliente_id' => ['required'],
            'administrador_id' => ['required'],
        ]);
        if(!$validator->fails()) {

            $inscripcion = BoletaInscripcion::create([
                'fecha_inscripcion' => $request['fecha_inscripcion'],
                'fecha_inicio' => $request['fecha_inicio'],
                'fecha_fin' => $request['fecha_fin'],
                'importe' => $request['importe'],
                'total' => $request['total'],
                'descuento_id' => $request['descuento_id'],
                'cliente_id' => $request['cliente_id'],
                'administrador_id' => $request['administrador_id'],
            ]);
            
            return redirect()->route('inscripciones.index', $inscripcion->id)->with('success', 'Inscripcion Creada Correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(BoletaInscripcion $inscripcion){
        return view('inscripciones.show', compact('inscripcion'));
    }

    public function edit(BoletaInscripcion $inscripcion)
    {
        return view('inscripciones.edit', compact('inscripcion'));
    }

    public function update(Request $request, BoletaInscripcion $inscripcion)
    {
        $data = $request->only('fecha_inscripcion','fecha_inicio','fecha_fin','importe','total','descuento_id','cliente_id','administrador_id');
        $inscripcion->update($data);
        return redirect()->route('inscripciones.show', $inscripcion->id)->with('success', 'Inscripcion actualizada correctamente');
    }

    public function destroy(BoletaInscripcion $inscripcion)
    {
        $inscripcion->delete();
        return back()->with('success','Inscripcion eliminado correctamente');
    }
}
