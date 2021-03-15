@extends('layouts.main', ['activePage' => 'disciplinas', 'titlePage' => 'Disciplina'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Disciplinas</h4>
                    <p class="card-category">Disciplinas Registrados</p>
                  </div>
                  <div class="card-body">
                 @if (session('success'))
                    <div class="alert alert-success" role="success">
                      {{ session('success') }}
                    </div>
                    @endif

                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('disciplinas.create') }}" class="btn btn-sm btn-facebook">Agregar una Nueva Disciplina</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Costo</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody >
                        @foreach ($disciplinas as $disciplina)
                            <tr > 
                              <td>{{ $disciplina->id }}</td>
                              <td>{{ $disciplina->nombre }}</td>
                              <td>{{ $disciplina->costo }}</td>
                              <td class="td-actions text-right">
                        
                                <form action="{{ route('disciplinas.delete', $disciplina->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
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