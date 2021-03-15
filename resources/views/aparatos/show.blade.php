@extends('layouts.main', ['activePage' => 'aparatos', 'titlePage' => 'Detalles del aparato'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Casilleros</div>
            <p class="card-category">Vista detallada del Aparato {{ $aparato->numero }}</p>
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
                          <h5 class="title mt-3">{{ $aparato->id }}</h5>
                        </a>
                        <p class="description">
                        {{ $aparato->id }} <br>
                        {{ $aparato->nombre }} <br>
                        {{ $aparato->marca }} <br>
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
                          <h5 class="title mx-3">{{ $aparato->modelo }}</h5>
                        </a>
                        <p class="description">
                          {{ $sala->id }} <br>
                          {{ $sala->marca }} <br>
                          {{ $sala->modelo }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('aparatos.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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
                          <td>{{ $aparato->id }}
                          </td>
                        </tr>
                        <tr>
                          <th>Marca</th>
                          <td>{{ $aparato->marca }}</td>
                        </tr>
                        <tr>
                          <th>Modelo</th>
                          <td><span class="badge badge-primary">{{ $aparato->modelo }}</span></td>
                        </tr>
                        <tr>
                          <th>Estado</th>
                          <td>{!! $aparato->estado_id !!}</td>
                        </tr>
                        <tr>
                          <th>ID</th>
                          <td><a href="#" target="_blank">{{  $aparato->id  }}</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('aparatos.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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