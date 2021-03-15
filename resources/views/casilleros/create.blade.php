@extends('layouts.main', ['activePage'=> 'casilleros', 'titlePage' => 'Nuevo Casillero'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('casilleros.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Casilleros</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="numero" class="col-sm-2 col-form-label">Numero</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="numero" placeholder="Ingrese el numero" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="tiempo" class="col-sm-2 col-form-label">Tiempo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="tiempo" placeholder="Ingrese el tiempo" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="costo" class="col-sm-2 col-form-label">Costo</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="costo" placeholder="Ingrese el tiempo" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombre" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese el Costo" autofocus>
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