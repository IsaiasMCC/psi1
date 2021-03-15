@extends('layouts.main', ['activePage'=> 'disciplinas','activePage'=> 'categorias', 'titlePage' => 'Nuevo Disciplina'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('disciplinas.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Disciplinas</h4>
                            <p class="card-category">Ingresar Disciplinas</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre de la disciplina" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="costo" class="col-sm-2 col-form-label">Costo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="costo" placeholder="Ingrese el costo de la disciplina" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="nomb_categoria" class="col-sm-2 col-form-label">Categoria</label>
                                <div class="col-sm-7">
                                   <!-- <input type="text" class="form-control" name="nomb_categoria" placeholder="Ingrese el nombre de la categoria" autofocus> -->
                                   <!-- The second value will be selected initially -->
                                   <div>
                                     <select clas="form-control" name="categoria_id">
                                      <option value="" > Selecione una Categoria </option>  
                                       @foreach ($categorias as $categoria)
                                        <option value=" {{ $categoria->id }}" > {{ $categoria->nombre }}</option>
                                       @endforeach
                                      </select>
                                    </div>
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