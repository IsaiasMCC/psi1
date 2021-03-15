@extends('layouts.main', ['activePage'=> 'aparatos','activePage'=> 'salas', 'titlePage' => 'Nuevo Aparato'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('aparatos.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Aparatos</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombre_aparato" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombre_aparato" placeholder="Ingrese el nombre" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="marca" class="col-sm-2 col-form-label">Marca</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="marca" placeholder="Ingrese la marca" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="modelo" class="col-sm-2 col-form-label">Modelo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="modelo" placeholder="Ingrese el tiempo" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombre_estado" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombre_estado" placeholder="Ingrese el id del estado" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="sala_id" class="col-sm-2 col-form-label">ID Sala</label>
                                <div class="col-sm-7">
                                   <!-- <input type="number" class="form-control" name="sala_id" placeholder="Ingrese el id de la sala" autofocus> -->
                                   <select class="form-control" >

                                     <option selected> Seleccione una Sala</option>
                                   @foreach($salas as $sala)

                                        <option value=" {{ $sala->id }}"> {{ $sala->id}}</option>

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