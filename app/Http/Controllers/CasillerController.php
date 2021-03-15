<?php

namespace App\Http\Controllers;

use App\Models\Casillero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Estado;

class CasillerController extends Controller
{
    public function index()
    {
        $casilleros=Casillero::paginate(5);
        /*  $categorias=$categorias->distinct()->get(); */
         return view('casilleros.index', compact('casilleros'));
    }

    public function create()
    {
        return view('casilleros.create');
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'numero' => ['required'],
            'tiempo' => ['required'],
        ]);
        if(!$validator->fails()) {

            $estado = Estado::create([
                'nombre' => $request['nombre'],
                ]
            );

            $casillero = Casillero::create([
                'numero' => $request['numero'],
                'tiempo' => $request['tiempo'],
                'costo' => $request['costo'],
                'estado_id' => $estado->id,
            ]);
            
            return redirect()->route('casilleros.index', $casillero->id)->with('success', 'Casillero creado correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(Casillero $casillero){
        return view('casilleros.show', compact('casillero'));
    }

    public function edit(Casillero $casillero)
    {
        return view('casilleros.edit', compact('casillero'));
    }

    public function update(Request $request, Casillero $casillero)
    {
        $data = $request->only('numero','tiempo','costo','nombre');
        $casillero->update($data);
        return redirect()->route('salas.show', $casillero->id)->with('success', 'Sala actualizado correctamente');
    }

    public function destroy(Casillero $casillero)
    {
        $casillero->delete();
        return back()->with('success','Casillero eliminado correctamente');
    }

}
