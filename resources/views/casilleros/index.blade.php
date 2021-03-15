@extends('layouts.main', ['activePage' => 'casilleros', 'titlePage' => 'Casilleros'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Casillero</h4>
                    <p class="card-category">Casilleros registrados</p>
                  </div>
                  <div class="card-body">
                    @if (session('success'))
                      <div class="alert alert-success" role="success">
                    {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('casilleros.create') }}" class="btn btn-sm btn-facebook">Añadir Casillero</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>ID</th>
                          <th>numero</th>
                          <th>tiempo</th>
                          <th>costo</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody >
                        <!-- esto es la base de datos depende a sus atributos -->
                        @foreach ($casilleros as $casillero)
                            <tr > 
                              <td>{{ $casillero->id }}</td>
                              <td>{{ $casillero->numero }}</td>
                              <td>{{ $casillero->tiempo }}</td>
                              <td>{{ $casillero->costo }}</td>
                              <td class="td-actions text-right">
                              <a href="{{ route('casilleros.show', $casillero->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                <form action="{{ route('casilleros.delete', $casillero->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
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