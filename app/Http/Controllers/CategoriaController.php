<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    public function index()
    {
       $categorias=Categoria::paginate(5);
      /*  $categorias=$categorias->distinct()->get(); */
       return view('categorias.index', compact('categorias'));
    }       

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'nombre' => ['required'],
        ]);
        if(!$validator->fails()) {

            $categoria = Categoria::create([
                'nombre' => $request['nombre'],
            ]);
            
            return redirect()->route('categorias.index', $categoria->id)->with('success', 'Categoria añadido correctamente');
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
        $data = $request->only('nombre');
        $categoria->update($data);
        return redirect()->route('horarios.show', $categoria->id)->with('success', 'Categoria actualizado correctamente');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return back()->with('success','categoria eliminado correctamente');
    }

}
