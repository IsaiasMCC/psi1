@extends('layouts.main', ['activePage'=> 'inscripciones', 'titlePage' => 'Editar Inscripcion'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('isncripciones.update', $inscripcion->id) }}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <label for="fecha_inscripcion" class="col-sm-2 col-form-label">Fecha Inscripcion</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="fecha_inscripcion" placeholder="Ingrese la fecha" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="fecha_inicio" class="col-sm-2 col-form-label">Fecha Inicio</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="fecha_inicio" placeholder="Ingrese la fecha inicio" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="fecha_fin" class="col-sm-2 col-form-label">Fecha Fin</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="fecha_fin" placeholder="Ingresela fecha fin">
                                </div>
                            </div>
                            <div class="row">
                                <label for="total" class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="total" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <label for="descuento_id" class="col-sm-2 col-form-label">ID del decuento</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="descuento_id" placeholder="Ingrese el id del descuento">
                                </div>
                            </div>
                            <div class="row">
                                <label for="cliente_id" class="col-sm-2 col-form-label">ID del cliente</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="cliente_id" placeholder="Ingrese el id del cliente">
                                </div>
                            </div>
                            <div class="row">
                                <label for="administrador_id" class="col-sm-2 col-form-label">ID del Administrador</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="administrador_id" placeholder="Ingrese el id del administrador">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Footer-->
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                    <!--End footer-->
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection