@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>List Roles</h1>
@stop

@section('content')

    @forelse ($roles as $role)
        <h1> {{ $role->name }} </h1>
        <p> {{ $role->label }} </p> <br>
    @empty
        <p>Nenhum Post Cadastrado!!!</p>
    @endforelse
@stop

