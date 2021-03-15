@extends('layouts.main', ['activePage' => 'alquileres', 'titlePage' => 'Detalles del Alquiler'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Alquileres</div>
            <p class="card-category">Vista detallada del horario {{ $alquiler->nombre }}</p>
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
                          <h5 class="title mt-3">{{ $alquiler->id }}</h5>
                        </a>
                        <p class="description">
                        {{ $alquiler->id }} <br>
                        {{ $alquiler->fecha }} <br>
                        {{ $alquiler->cantidad }} <br>
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
                          <h5 class="title mx-3">{{ $alquiler->id }}</h5>
                        </a>
                        <p class="description">
                          {{ $alquiler->importe }} <br>
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
                      <a href="{{ route('alquileres.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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
                          <td>{{ $alquiler->id }}
                          </td>
                        </tr>
                        <tr>
                          <th>Fecha</th>
                          <td>{{ $alquiler->fecha }}</td>
                        </tr>
                        <tr>
                          <th>Cantidad</th>
                          <td><span class="badge badge-primary">{{ $alquiler->importe }}</span></td>
                        </tr>
                        <tr>
                          <th>Total</th>
                          <td>{!! $alquiler->total !!}</td>
                        </tr>
                        <tr>
                          <th>ID</th>
                          <td><a href="#" target="_blank">{{  $alquiler->id  }}</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('alquileres.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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