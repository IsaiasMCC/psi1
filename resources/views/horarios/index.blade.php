@extends('layouts.main', ['activePage' => 'horarios', 'titlePage' => 'Horarios'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Horario</h4>
                    <p class="card-category">Horarios registrados</p>
                  </div>
                  <div class="card-body">
                    @if (session('success'))
                      <div class="alert alert-success" role="success">
                    {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('horarios.create') }}" class="btn btn-sm btn-facebook">Añadir Horario</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>ID</th>
                          <th>Hora Inicio</th>
                          <th>Hora Fin</th>
                          <th>Dias</th>
                          <th>ID de la Sala</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody >
                        <!-- esto es la base de datos depende a sus atributos -->
                        @foreach ($horarios as $horario)
                            <tr > 
                              <td>{{ $horario->id }}</td>
                              <td>{{ $horario->hora_inicio }}</td>
                              <td>{{ $horario->hora_fin }}</td>
                              <td>{{ $horario->dia }}</td>
                              <td>{{ $horario->sala_id }}</td>
                              <td class="td-actions text-right">
                              <a href="{{ route('horarios.show', $horario->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                <form action="{{ route('horarios.delete', $horario->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
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