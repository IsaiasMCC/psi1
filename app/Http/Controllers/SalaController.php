<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SalaController extends Controller
{
    public function index()
    {
       $salas=Sala::paginate(5);
       return view('salas.index', compact('salas'));
    }

    public function create()
    {
        return view('salas.create');
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'tamaño' => ['required'],
            'nombre' => ['required'],
        ]);
        if(!$validator->fails()) {

            $estado = Estado::create([
                'nombre' => $request['nombre'],
                ]
            );

            $sala = Sala::create([
                'tamaño' => $request['tamaño'],
                'estado_id' => $estado->id,
            ]);
            
            return redirect()->route('salas.index', $sala->id)->with('success', 'Sala creado correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(Sala $sala){
        return view('salas.show', compact('sala'));
    }

    public function edit(Sala $sala)
    {
        return view('salas.edit', compact('sala'));
    }

    public function update(Request $request, Sala $sala)
    {
        $data = $request->only('tamaño','estado_id');
        $sala->update($data);
        return redirect()->route('salas.show', $sala->id)->with('success', 'Sala actualizado correctamente');
    }

    public function destroy(Sala $sala)
    {
        $sala->delete();
        return back()->with('success','Sala eliminado correctamente');
    }
}
