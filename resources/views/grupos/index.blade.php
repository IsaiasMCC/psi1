@extends('layouts.main', ['activePage' => 'grupos', 'titlePage' => 'Grupo de Entrenamientos'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Grupos de Entrenamientos</h4>
                <p class="card-category">Grupos de Entrenamientos Registrados</p>
              </div>
              <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success" role="success">
                  {{ session('success') }}
                </div>
                @endif

                <div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('grupos.create') }}" class="btn btn-sm btn-facebook">Agregar un Grupo de Entrenamiento</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Cupo</th>
                      <th>ID del Instructor</th>
                      <th>ID de la disciplina</th>
                      <th class="text-right">Acciones</th>
                    </thead>
                    <tbody>
                      @foreach ($grupos as $grupo)
                      <tr>
                        <td>{{ $grupo->id }}</td>
                        <td>{{ $grupo->nombre }}</td>
                        <td>{{ $grupo->cupo }}</td>
                        <td>{{ $grupo->instructor_id }}</td>
                        <td>{{ $grupo->disciplina_id }}</td>
                        <td class="td-actions text-right">
                          <a href="{{ route('grupos.show', $grupo->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                          <form action="{{ route('grupos.delete', $grupo->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
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