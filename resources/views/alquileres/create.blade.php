@extends('layouts.main', ['activePage'=> 'alquileres', 'titlePage' => 'Nuevo Alquiler'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('alquileres.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Alquiler</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="fecha" placeholder="Ingrese la fecha" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="cantidad" placeholder="Ingrese la cantidad" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="importe" class="col-sm-2 col-form-label">Importe</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="importe" placeholder="Ingrese el importe">
                                </div>
                            </div>
                            <div class="row">
                                <label for="total" class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="total" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <label for="casillero_id" class="col-sm-2 col-form-label">ID del casillero</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="casillero_id" placeholder="Ingrese el id del casillero">
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