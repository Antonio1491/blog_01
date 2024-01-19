@extends('adminlte::page')

@section('title', 'Admin - Blog 01')

@section('content_header')

    <a class="btn btn-secondary float-right" href="{{route('admin.posts.create')}}">Nuevo post</a>

    <h1>Listado de post</h1>
@stop

@section('content')

    <livewire:Admin.PostsIndex />
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop