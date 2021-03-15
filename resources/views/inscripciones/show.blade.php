@extends('layouts.main', ['activePage' => 'isncripciones', 'titlePage' => 'Detalles de la Inscripcion'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Inscripcion</div>
            <p class="card-category">Vista detallada de la inscripcion {{ $inscripcion->id }}</p>
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
                          <h5 class="title mt-3">{{ $inscripcion->id }}</h5>
                        </a>
                        <p class="description">
                        {{ $inscripcion->id }} <br>
                        {{ $inscripcion->fecha_inicio }} <br>
                        {{ $inscripcion->fecha_fin }} <br>
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
                          <h5 class="title mx-3">{{ $inscripcion->id }}</h5>
                        </a>
                        <p class="description">
                          {{ $alquiler->fecha_inscripcion }} <br>
                          {{ $alquiler->total }} <br>
                          {{ $alquiler->casillero_id }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('inscripciones.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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
                          <td>{{ $inscripcion->id }}
                          </td>
                        </tr>
                        <tr>
                          <th>Fecha Inicio</th>
                          <td>{{ $inscripcion->fecha_inicio }}</td>
                        </tr>
                        <tr>
                          <th>Fecha Fin</th>
                          <td><span class="badge badge-primary">{{ $inscripcion->fecha_fin }}</span></td>
                        </tr>
                        <tr>
                          <th>Fecha Inscripcion</th>
                          <td>{!! $inscripcion->fecha_inscripcion !!}</td>
                        </tr>
                        <tr>
                          <th>ID</th>
                          <td><a href="#" target="_blank">{{  $inscripcion->id  }}</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('inscripciones.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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