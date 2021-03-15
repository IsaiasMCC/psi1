<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use App\Models\GruposEntrenamientos;
use App\Models\Disciplina;
use App\Models\Instructor;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function index()
    {
        $grupos=GruposEntrenamientos::paginate(5);
        return view('grupos.index', compact('grupos')); 
    }

    public function create()
    {
        $instructores = Instructor::all();
        $disciplinas = Disciplina::all();
        return view('grupos.create',compact('disciplinas'),compact('instructores'));
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'nombre' => ['required', 'string', 'max:255'],
            'cupo' => ['required'],
            'instructor_id' => ['required'],
            'disciplina_id' =>  ['required']
        ]);
        if(!$validator->fails()) {
            
            $grupo = GruposEntrenamientos::create([
                'nombre' => $request['nombre'],
                'cupo' => $request['cupo'],
                'instructor_id' => $request['instructor_id'],
                'disciplina_id' =>$request['disciplina_id'],
            ]);
            
        
            return redirect()->route('grupos.show', $grupo->id)->with('success', 'grupo creado correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(GruposEntrenamientos $grupo)
    {
        return view('grupos.show', compact('grupo'));

    }

    public function edit(GruposEntrenamientos $grupo)
    {
        return view('grupos.edit', compact('grupo'));
    }
    
    public function update(Request $request, GruposEntrenamientos $grupo)
    {
        $data = $request->only('nombre', 'cupo','instructor_id','disciplina_id');
        $grupo->update($data);
        return redirect()->route('grupos.show', $grupo->id)->with('success', 'Grupo actualizado correctamente');
    }

    public function destroy(GruposEntrenamientos $grupo)
    {
        $grupo ->delete();
        return back()->with('success','Grupo eliminado correctamente');
    }

}
