@extends('adminlte::page')

@section('title', 'Admin - Blog 01')

@section('content_header')
    <h1>Listado de post</h1>
@stop

@section('content')
    {{-- @livewire('admin.posts.index') --}}
    <livewire:Admin.PostsIndex />
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop