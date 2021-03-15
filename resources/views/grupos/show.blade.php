@extends('layouts.main', ['activePage' => 'grupos ', 'titlePage' => 'Detalles del Grupo de Entrenamiento'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Salas</div>
            <p class="card-category">Vista detallada del grupo {{ $grupo->nombre }}</p>
          </div>
          <!--body-->
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success" role="success">
              {{ session('success') }}
            </div>
            @endif
            <div class="row">
              <div class="col-md-4">
                <div class="card card-cliente">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#">
                          <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                          <h5 class="title mt-3">{{ $grupo->id }}</h5>
                        </a>
                        <p class="description">
                        {{ $grupo->id }} <br>
                        {{ $grupo->nombre }} <br>
                        {{ $grupo->instructor_id }} <br>
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                       
                    </div>
                  </div>
               
                </div>
              </div><!--end card user-->

              <div class="col-md-4">
                <div class="card card-cliente">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#" class="d-flex">
                          <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                          <h5 class="title mx-3">{{ $grupo->nombre }}</h5>
                        </a>
                        <p class="description">
                          {{ $grupo->id }} <br>
                          {{ $grupo->nombre }} <br>
                          {{ $grupo->instructor_id }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('grupos.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                    </div>
                  </div>
                </div>
              </div><!--end card user 2-->

              <!--Start third-->
              <div class="col-md-4">
                <div class="card card-cliente">
                  <div class="card-body">
                    <table class="table table-bordered table-striped">
                      <tbody>
                        <tr>
                          <th>ID</th>
                          <td>{{ $grupo->id }}
                          </td>
                        </tr>
                        <tr>
                          <th>Cupo</th>
                          <td>{{ $grupo->cupo }}</td>
                        </tr>
                        <tr>
                          <th>ID Instructor</th>
                          <td><span class="badge badge-primary">{{ $grupo->instructor_id }}</span></td>
                        </tr>
                        <tr>
                          <th>ID Disciplina</th>
                          <td>{!! $grupo->disciplina_id !!}</td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('grupos.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                    </div>
                  </div>
                </div>
              </div>
              <!--end third-->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection