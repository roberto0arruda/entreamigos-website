@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop


@section('content')

{{-- Small boxes (Stat box) --}}
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3> {{$totalPosts}} </h3>
        <p>Posts</p>
      </div>     
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3> {{$totalUsers}} </h3>
        <p>User Registrations</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3> {{$totalRoles}} <sup style="font-size: 20px">-</sup></h3>
        <p>Roles</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3> {{$totalPermissions}} </h3>
        <p>Permissions</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>  
  <!-- ./col -->
</div>

    @forelse ($posts as $post)
        <h1> {{ $post->title }} </h1>
        <p> {{ $post->description }} </p> <br>
        <b>Autor: {{ $post->user->name }} </b>
        @can('update-post', $post)
            <a href=" {{ url("admin/post/$post->id/update") }} ">Editar</a>
        @endcan
        <hr>
    @empty
        <p>Nenhum Post Cadastrado!!!</p>
    @endforelse
@stop