@extends('layouts.main', ['activePage'=> 'horarios', 'titlePage' => 'Nuevo Horario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('horarios.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Horario</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="hora_inicio" class="col-sm-2 col-form-label">Hora Inicio</label>
                                <div class="col-sm-7">
                                    <input type="time" class="form-control" name="hora_inicio" placeholder="Ingrese la hora de inicio" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="hora_fin" class="col-sm-2 col-form-label">Hora Fin</label>
                                <div class="col-sm-7">
                                    <input type="time" class="form-control" name="hora_fin" placeholder="Ingrese la hora de fin" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="dia" class="col-sm-2 col-form-label">Dias</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="dia" placeholder="Ingrese los dias" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="sala_id" class="col-sm-2 col-form-label">Sala</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="sala_id" placeholder="Ingrese la sala" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="grupo_id" class="col-sm-2 col-form-label">Grupo</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="grupo_id" placeholder="Ingrese el grupo" autofocus>
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