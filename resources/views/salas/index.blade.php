@extends('layouts.main', ['activePage' => 'salas', 'titlePage' => 'Salas'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Salas</h4>
                    <p class="card-category">Salas registradas</p>
                  </div>
                  <div class="card-body">
                    @if (session('success'))
                      <div class="alert alert-success" role="success">
                    {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('salas.create') }}" class="btn btn-sm btn-facebook">Añadir Sala</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>ID</th>
                          <th>Tamaño</th>
                          <th>ID Estado</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody >
                        <!-- esto es la base de datos depende a sus atributos -->
                        @foreach ($salas as $sala)
                            <tr > 
                              <td>{{ $sala->id }}</td>
                              <td>{{ $sala->tamaño }}</td>
                              <td>{{ $sala->estado_id }}</td>
                              <td class="td-actions text-right">
                              <a href="{{ route('salas.show', $sala->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                <form action="{{ route('salas.delete', $sala->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
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