<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Disciplina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DisciplinaController extends Controller
{
    public function index()
    {
       $disciplinas=Disciplina::paginate(5);
       return view('disciplinas.index', compact('disciplinas'));
    }

    public function create()
    {
        $categorias =Categoria::all();
        return view('disciplinas.create',compact('categorias'));
    }

    public function store(Request $request)
    {
       
        $validator=Validator::make($request->all(), [
            'nombre' => ['required'],
            'costo' => ['required'],
            'categoria_id' => ['required'],
        ]);
        if(!$validator->fails()) {          
            $disciplina =Disciplina::create([
                'nombre' => $request['nombre'],
                'costo' => $request['costo'],
                'categoria_id' => $request['categoria_id'],
            ]);
            
            return redirect()->route('disciplinas.index', $disciplina->id)->with('success', 'Disciplina creado correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(Categoria $categoria){
        return view('categorias.show', compact('categoria'));
    }

    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        $data = $request->only('nombre','costo','categoria_id');
        $categoria->update($data);
        return redirect()->route('categorias.show', $categoria->id)->with('success', 'Categoria actualizado correctamente');
    }
}
