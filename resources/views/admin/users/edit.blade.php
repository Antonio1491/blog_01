@extends('adminlte::page')

@section('title', 'Admin - Blog 01')

@section('content_header')
    <h1>Asignar un rol</h1>
@stop

@section('content')

  @if (session('info'))
    <div class="alert alert-success">
      <strong>
        {{ session('info') }}
      </strong>
    </div>
  @endif

 <div class="card">
  <div class="card-body">
    <h5 class="">Nombre:</p>
      <p class="form-control">{{$user->name}}</p>

      {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put'])!!}
      @foreach ($roles as $role)
        <div>
          <label>
            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
            {{ $role->name }}
          </label>
        </div>
      @endforeach

      {!! Form::submit('Asignar rol', ['class'=> 'btn btn-primary']) !!}
      {!! Form::close() !!}

  </div>
 </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop