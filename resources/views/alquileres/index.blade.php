@extends('layouts.main', ['activePage' => 'alquilercasilleros', 'titlePage' => 'Alquiler de Casilleros'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Alquileres</h4>
                    <p class="card-category">Alquileres registrados</p>
                  </div>
                  <div class="card-body">
                    @if (session('success'))
                      <div class="alert alert-success" role="success">
                    {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('alquileres.create') }}" class="btn btn-sm btn-facebook">Añadir Casillero</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>ID</th>
                          <th>Fecha</th>
                          <th>Cantidad</th>
                          <th>Importes</th>
                          <th>Total</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody >
                        <!-- esto es la base de datos depende a sus atributos -->
                        @foreach ($alquileres as $alquiler)
                            <tr > 
                              <td>{{ $alquiler->id }}</td>
                              <td>{{ $alquiler->fecha }}</td>
                              <td>{{ $alquiler->cantidad }}</td>
                              <td>{{ $alquiler->importe }}</td>
                              <td>{{ $alquiler->total }}</td>
                              <td class="td-actions text-right">
                              <a href="{{ route('alquileres.show', $alquiler->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                              <a href="{{ route('alquileres.edit', $alquiler->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                <form action="{{ route('alquileres.delete', $alquiler->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
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