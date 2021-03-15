@extends('layouts.main', ['activePage'=> 'inscripciones', 'titlePage' => 'Nuevo Inscripcion'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('inscripciones.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Inscripcion</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
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
                                <label for="importe" class="col-sm-2 col-form-label">Importe</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="importe" placeholder="Ingrese el Importe">
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