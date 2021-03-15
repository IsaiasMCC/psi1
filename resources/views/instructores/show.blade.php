@extends('layouts.main', ['activePage' => 'instructores', 'titlePage' => 'Detalles del instructor'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Instructores</div>
            <p class="card-category">Vista detallada del instructor {{ $instructor->nombre }}</p>
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
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#">
                          <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                          <h5 class="title mt-3">{{ $instructor->nombre }}</h5>
                        </a>
                        <p class="description">
                        {{ $instructor->nombre }} <br>
                        {{ $instructor->apellido }} <br>
                        {{ $instructor->correo }} <br>
                        {{ $instructor ->tipo_instructor }} <br>
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                       
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                    <a href="{{ route('instructores.edit', $instructor->id) }}" class="btn btn-sm btn-primary" >Editar</a>
                    </div>
                  </div>
                </div>
              </div><!--end card user-->

              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#" class="d-flex">
                          <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                          <h5 class="title mx-3">{{ $instructor->name }}</h5>
                        </a>
                        <p class="description">
                        {{ $instructor->nombre }} <br>
                        {{ $instructor->apellido }} <br>
                        {{ $instructor->correo }} <br>
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('instructores.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="{{ route('instructores.edit', $instructor->id) }}" class="btn btn-sm btn-primary" >Editar</a>
                    </div>
                  </div>
                </div>
              </div><!--end card user 2-->

              <!--Start third-->
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <table class="table table-bordered table-striped">
                      <tbody>
                        <tr>
                          <th>ID</th>
                          <td>{{ $instructor->id }}
                          </td>
                        </tr>
                        <tr>
                          <th>Name</th>
                          <td>{{ $instructor->nombre }}</td>
                        </tr>
                        <tr>
                          <th>Email</th>
                          <td><span class="badge badge-primary">{{ $instructor->correo }}</span></td>
                        </tr>
                        <tr>
                          <th>CI</th>
                          <td>{!! $instructor->carnet_identidad !!}</td>
                        </tr>
                        <tr>
                          <th>Direccion</th>
                          <td><a href="#" target="_blank">{{  $instructor->tipo_instructor  }}</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('instructores.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="{{ route('instructores.edit', $instructor->id) }}" class="btn btn-sm btn-twitter"> Editar </a>
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