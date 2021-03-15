@extends('layouts.main', ['activePage'=> 'grupos','activePage'=> 'disciplinas','activePage'=> 'instructores', 'titlePage' => 'Nuevo Grupo de Entrenamiento'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('grupos.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Grupos de Entrenamiento</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre de la categoria" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="cupo" class="col-sm-2 col-form-label">Cupo</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="cupo" placeholder="Ingrese el cupo maximo" >
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="instructor_id" class="col-sm-2 col-form-label">ID del instructor</label>
                                <div class="col-sm-7">
                                   <!-- <input type="number" class="form-control" name="instructor_id" placeholder="Ingrese el id del instructor" > -->
                                   <select class="form-control" >

                                        <option selected> Seleccione un Instructor</option>
                                        @foreach($instructores as $instructor)

                                        <option value=" {{ $instructor->id }}"> {{ $instructor->id}}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="disciplina_id" class="col-sm-2 col-form-label">ID de la disciplina</label>
                                <div class="col-sm-7">
                                  <!--  <input type="number" class="form-control" name="disciplina_id" placeholder="Ingrese el id de la disciplina" autofocus> -->
                                  <select class="form-control" >

                                            <option selected> Seleccione una Disciplina</option>
                                            @foreach($disciplinas as $disciplina)

                                            <option value=" {{ $disciplina->id }}"> {{ $disciplina->nombre}}</option>

                                            @endforeach

                                  </select>
                                </div>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        <!--End footer-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection