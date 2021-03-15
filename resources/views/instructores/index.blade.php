@extends('layouts.main', ['activePage' => 'instructores', 'titlePage' => 'Instructores'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Instructor</h4>
                    <p class="card-category">Instructores registrados</p>
                  </div>
                  <div class="card-body">
                    @if (session('success'))
                      <div class="alert alert-success" role="success">
                    {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('instructores.create') }}" class="btn btn-sm btn-facebook">Añadir Instructor</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Correo</th>
                          <th>Tipo de Instructor</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody >
                        <!-- esto es la base de datos depende a sus atributos -->
                        @foreach ($instructores as $instructor)
                            <tr > 
                              <td>{{ $instructor->id }}</td>
                              <td>{{ $instructor->nombre }}</td>
                              <td>{{ $instructor->apellido }}</td>
                              <td>{{ $instructor->correo }}</td>
                              <td>{{ $instructor->tipo_instructor }}</td>
                              <td class="td-actions text-right">
                              <a href="{{ route('instructores.show', $instructor->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                              <a href="{{ route('instructores.edit', $instructor->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                <form action="{{ route('instructores.delete', $instructor->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
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