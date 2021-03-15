@extends('layouts.main', ['activePage' => 'horarios', 'titlePage' => 'Detalles del Horario'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Salas</div>
            <p class="card-category">Vista detallada del horario {{ $horario->nombre }}</p>
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
                          <h5 class="title mt-3">{{ $horario->id }}</h5>
                        </a>
                        <p class="description">
                        {{ $horario->id }} <br>
                        {{ $horario->hora_inicio }} <br>
                        {{ $horario->hora_fin }} <br>
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
                          <h5 class="title mx-3">{{ $horario->id }}</h5>
                        </a>
                        <p class="description">
                          {{ $horario->hora_inicio }} <br>
                          {{ $horario->hora_fin }} <br>
                          {{ $horario->dia }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('horarios.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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
                          <td>{{ $horario->id }}
                          </td>
                        </tr>
                        <tr>
                          <th>Hora Inicio</th>
                          <td>{{ $horario->hora_inicio }}</td>
                        </tr>
                        <tr>
                          <th>Hora Fin</th>
                          <td><span class="badge badge-primary">{{ $horario->hora_fin }}</span></td>
                        </tr>
                        <tr>
                          <th>Dias</th>
                          <td>{!! $horario->dia !!}</td>
                        </tr>
                        <tr>
                          <th>ID</th>
                          <td><a href="#" target="_blank">{{  $horario->id  }}</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('horarios.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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