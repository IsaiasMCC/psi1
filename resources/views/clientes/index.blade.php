@extends('layouts.main', ['activePage' => 'clientes', 'titlePage' => 'Clientes'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Cliente</h4>
                    <p class="card-category">Clientes registrados</p>
                  </div>
                  <div class="card-body">
                 @if (session('success'))
                    <div class="alert alert-success" role="success">
                      {{ session('success') }}
                    </div>
                    @endif

                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('clientes.create') }}" class="btn btn-sm btn-facebook">Añadir Cliente</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Correo</th>
                          <th>Antiguedad</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody >
                        @foreach ($clientes as $cliente)
                            <tr > 
                              <td>{{ $cliente->nombre }}</td>
                              <td>{{ $cliente->apellido }}</td>
                              <td>{{ $cliente->correo }}</td>
                              <td>{{ $cliente->antiguedad }}</td>
                              <td class="td-actions text-right">
                              <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                              <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                <form action="{{ route('clientes.delete', $cliente->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
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