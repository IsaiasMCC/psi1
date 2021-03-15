@extends('layouts.main', ['activePage' => 'administradores', 'titlePage' => 'Administradores'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Administrador</h4>
                    <p class="card-category">Administradores registrados</p>
                  </div>
                  <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="success">
                      {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('administradores.create') }}" class="btn btn-sm btn-facebook">Añadir Administrador</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">  
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Correo</th>
                          <th>Tipo de Administrador</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody >
                        <!-- esto es la base de datos depende a sus atributos -->
                        @foreach ($administradores as $administrador)
                            <tr > 
                              <td>{{ $administrador->id }}</td>
                              <td>{{ $administrador->nombre }}</td>
                              <td>{{ $administrador->apellido }}</td>
                              <td>{{ $administrador->correo }}</td>
                              <td>{{ $administrador->tipo_administrador }}</td>
                              <td class="td-actions text-right">
                              <a href="{{ route('administradores.show', $administrador->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                              <a href="{{ route('administradores.edit', $administrador->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                <form action="{{ route('administradores.delete', $administrador->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
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