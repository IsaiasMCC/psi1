<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use Illuminate\Support\Facades\Validator;

class HorarioController extends Controller
{
    public function index(){
        $horarios=Horario::paginate(5);
        return view('horarios.index',compact('horarios'));
    }

    public function create()
    {
        return view('horarios.create');
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'hora_inicio' => ['required'],
            'hora_fin' =>  ['required'],
            'dia' => ['required'],
            'sala_id' =>  ['required'],
            'grupo_id' =>  ['required']
        ]);
        if(!$validator->fails()) {

            $horario = Horario::create([
                'hora_inicio' => $request['hora_inicio'],
                'hora_fin' => $request['hora_fin'],
                'dia' =>  $request['dia'],
                'sala_id' => $request['sala_id'],
                'grupo_id' => $request['grupo_id'],
            ]);
            
            return redirect()->route('horarios.index', $horario->id)->with('success', 'Horario añadido correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(Horario $horario){
        return view('horarios.show', compact('horario'));
    }

    public function edit(Horario $horario)
    {
        return view('horarios.edit', compact('horario'));
    }

    public function update(Request $request, Horario $horario)
    {
        $data = $request->only('hora_inicio', 'hora_fin','dia','sala_id');
        $horario->update($data);
        return redirect()->route('horarios.show', $horario->id)->with('success', 'Horario actualizado correctamente');
    }

    public function destroy(Horario $horario)
    {
        $horario->delete();
        return back()->with('success','Horario eliminado correctamente');
    }
}
