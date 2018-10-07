@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1> {{ $post->title }} </h1>
    <p> {{ $post->description }} </p> <br>
    <b>Autor: {{ $post->user->name }} </b>
@stop