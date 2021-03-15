<?php

namespace App\Http\Controllers;

use App\Models\AlquilerCasillero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlquilerController extends Controller
{
    public function index()
    {
       $alquileres=AlquilerCasillero::paginate(5);
       return view('alquileres.index', compact('alquileres'));
    }

    public function create()
    {
        return view('alquileres.create');
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'fecha' => ['required'],
            'cantidad' => ['required'],
            'importe' => ['required'],
            'total' => ['required'],
            'casillero_id' => ['required'],
            'cliente_id' => ['required'],
            'administrador_id' => ['required'],
        ]);
        if(!$validator->fails()) {

            $alquiler = AlquilerCasillero::create([
                'fecha' => $request['fecha'],
                'cantidad' => $request['cantidad'],
                'importe' => $request['importe'],
                'total' => $request['total'],
                'casillero_id' => $request['casillero_id'],
                'cliente_id' => $request['cliente_id'],
                'administrador_id' => $request['administrador_id'],
            ]);
            
            return redirect()->route('alquileres.index', $alquiler->id)->with('success', 'Alquiler Añadido Correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(AlquilerCasillero $alquiler){
        return view('alquileres.show', compact('alquiler'));
    }

    public function edit(AlquilerCasillero $alquiler)
    {
        return view('alquileres.edit', compact('alquiler'));
    }

    public function update(Request $request, AlquilerCasillero $alquiler)
    {
        $data = $request->only('fecha','cantidad','importe','total','casillero_id','cliente_id','administrador_id');
        $alquiler->update($data);
        return redirect()->route('alquileres.show', $alquiler->id)->with('success', 'Alquiler actualizado correctamente');
    }

    public function destroy(AlquilerCasillero $alquiler)
    {
        $alquiler->delete();
        return back()->with('success','Sala eliminado correctamente');
    }

}
