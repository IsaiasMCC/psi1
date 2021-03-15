@extends('layouts.main', ['activePage' => 'descuentos', 'titlePage' => 'Descuentos'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Descuentos</h4>
                    <p class="card-category">Descuentos Registrados</p>
                  </div>
                  <div class="card-body">
                 @if (session('success'))
                    <div class="alert alert-success" role="success">
                      {{ session('success') }}
                    </div>
                    @endif

                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('descuentos.create') }}" class="btn btn-sm btn-facebook">Agregar un Nuevo Descuento</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>ID</th>
                          <th>Criterio</th>
                          <th>Descuento</th>
                          <th>Estado</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody >
                        @foreach ($descuentos as $descuento1)
                            <tr > 
                              <td>{{ $descuento1->id }}</td>
                              <td>{{ $descuento1->criterio }}</td>
                              <td>{{ $descuento1->descuento }}</td>
                              <td>{{ $descuento1->estado }}</td>
                              <td class="td-actions text-right">
                        
                                <form action="{{ route('descuentos.delete', $descuento1->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" rel="tooltip">
                                  <i class="material-icons">close</i>
                                </button>
                              </form>
                              </td>
                            </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                    <div class="card-footer mr-auto">
                     
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection