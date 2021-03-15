@extends('layouts.main', ['activePage'=> 'descuentos', 'titlePage' => 'Nuevo Descuento'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('descuentos.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Descuento</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="criterio" class="col-sm-2 col-form-label">Criterio</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="criterio" placeholder="Ingrese el criterio" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="descuento" class="col-sm-2 col-form-label">Descuento</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="descuento" placeholder="Ingrese el descuento" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="estado" placeholder="Ingrese el estado">
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