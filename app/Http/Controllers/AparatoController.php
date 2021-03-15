<?php

namespace App\Http\Controllers;

use App\Models\Aparato;
use App\Models\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Estado;

class AparatoController extends Controller
{
    public function index()
    {
        $aparatos=Aparato::paginate(5);
        /*  $categorias=$categorias->distinct()->get(); */
         return view('aparatos.index', compact('aparatos'));
    }

    public function create()
    {
        $salas = Sala::all();
        return view('aparatos.create',compact('salas'));
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'nombre_aparato' => ['required'],
            'marca' => ['required'],
            'modelo' => ['required'],
            'nombre_estado' => ['required'],
            'sala_id' => ['required'],
        ]);
        if(!$validator->fails()) {

            $estado = Estado::create([
                'nombre' => $request['nombre_estado'],
                ]
            );

            $aparato = Aparato::create([
                'nombre' => $request['nombre_aparato'],
                'marca' => $request['marca'],
                'modelo' => $request['modelo'],
                'estado_id' => $estado->id,
                'sala_id' => $request['sala_id'],
            ]);
            
            return redirect()->route('aparatos.index', $aparato->id)->with('success', 'Aparato creado correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(Aparato $aparato){
        return view('aparatos.show', compact('aparato'));
    }

    public function destroy(Aparato $aparato)
    {
        $aparato->delete();
        return back()->with('success','Aparato   eliminado correctamente');
    }
}
