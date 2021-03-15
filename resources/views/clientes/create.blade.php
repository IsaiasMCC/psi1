@extends('layouts.main', ['activePage'=> 'clientes', 'titlePage' => 'Nuevo Cliente'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('clientes.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Cliente</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-7">
                                    <input type="correo" class="form-control" name="correo" placeholder="Ingrese su correo">
                                </div>
                            </div>
                            <div class="row">
                                <label for="carnet_identidad" class="col-sm-2 col-form-label">Carnet de Identidad</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="carnet_identidad" placeholder="Ingrese su carnet de identidad">
                                </div>
                            </div>
                            <div class="row">
                                <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="telefono" placeholder="Ingrese su telefono">
                                </div>
                            </div>
                            <div class="row">
                                <label for="antiguedad" class="col-sm-2 col-form-label">Antiguedad</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="antiguedad" placeholder="Ingrese su antiguedad">
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