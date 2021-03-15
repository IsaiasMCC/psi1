@extends('layouts.main', ['activePage' => 'clientes', 'titlePage' => 'Detalles del cliente'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Clientes</div>
            <p class="card-category">Vista detallada del cliente {{ $cliente->nombre }}</p>
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
                          <h5 class="title mt-3">{{ $cliente->nombre }}</h5>
                        </a>
                        <p class="description">
                        {{ $cliente->nombre }} <br>
                        {{ $cliente->apellido }} <br>
                        {{ $cliente->correo }} <br>
                        {{ $cliente ->antiguedad }} <br>
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                       
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-primary" >Editar</a>
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
                          <h5 class="title mx-3">{{ $cliente->nombre }}</h5>
                        </a>
                        <p class="description">
                          {{ $cliente->nombre }} <br>
                          {{ $cliente->correo }} <br>
                          {{ $cliente->telefono }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('clientes.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-primary" >Editar</a>
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
                          <td>{{ $cliente->id }}
                          </td>
                        </tr>
                        <tr>
                          <th>Nombre</th>
                          <td>{{ $cliente->nombre }}</td>
                        </tr>
                        <tr>
                          <th>Correo</th>
                          <td><span class="badge badge-primary">{{ $cliente->correo }}</span></td>
                        </tr>
                        <tr>
                          <th>CI</th>
                          <td>{!! $cliente->carnet_identidad !!}</td>
                        </tr>
                        <tr>
                          <th>Direccion</th>
                          <td><a href="#" target="_blank">{{  $cliente->telefono  }}</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('clientes.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-twitter"> Editar </a>
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