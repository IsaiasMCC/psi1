@extends('layouts.main', ['activePage' => 'categorias', 'titlePage' => 'Categoria'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Categorias</h4>
                    <p class="card-category">Categorias Registrados</p>
                  </div>
                  <div class="card-body">
                 @if (session('success'))
                    <div class="alert alert-success" role="success">
                      {{ session('success') }}
                    </div>
                    @endif

                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('categorias.create') }}" class="btn btn-sm btn-facebook">Agregar una Nueva Categoria</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>ID</th>
                          <th>Nombre</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody >
                        @foreach ($categorias as $categoria)
                            <tr > 
                              <td>{{ $categoria->id }}</td>
                              <td>{{ $categoria->nombre }}</td>
                              <td class="td-actions text-right">
                        
                                <form action="{{ route('categorias.delete', $categoria->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
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