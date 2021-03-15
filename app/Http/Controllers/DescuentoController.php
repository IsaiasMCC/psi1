<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DescuentoController extends Controller
{
    public function index()
    {
       $descuentos=Descuento::paginate(5);
       return view('descuentos.index', compact('descuentos'));
    }

    public function create()
    {
        return view('descuentos.create');
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'criterio' => ['required'],
            'descuento' => ['required'],
            'estado' => ['required']
        ]);
        if(!$validator->fails()) {

            $descuento1 = Descuento::create([
                'criterio' => $request['criterio'],
                'descuento' => $request['descuento'],
                'estado' => $request['estado']
            ]);
            
            return redirect()->route('descuentos.index', $descuento1->id)->with('success', 'Descuento creado correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(Descuento $descuento){
        return view('descuentos.show', compact('descuento'));
    }

    public function edit(Descuento $descuento)
    {
        return view('descuentos.edit', compact('descuento'));
    }

    public function update(Request $request, Descuento $descuento1)
    {
        $data = $request->only('criterio','descuento','estado');
        $descuento1->update($data);
        return redirect()->route('horarios.show', $descuento1->id)->with('success', 'Descuento actualizado correctamente');
    }

    public function destroy(Descuento $descuento)
    {
        $descuento->delete();
        return back()->with('success','Descuento eliminado correctamente');
    }
}

