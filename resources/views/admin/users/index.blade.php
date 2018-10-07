@extends('adminlte::page')

@section('title', 'Perfil')

@section('content_header')
    <h1>Ações de Usuário</h1>
@stop

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Usuários</h3>
                
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-add-user"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                    <tr class="danger">
                        <td>1</td>
                        <td>Admin</td>
                        <td></td>
                        <td>2018-9-26</td>
                        <td><span class="label label-danger">Blocked</span></td>
                    </tr>
                    @forelse ($users as $user)
                    @if ( $user->name != 'root' )
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td></td>
                    </tr>
                    @endif
                    @empty
                        <p>Nenhum Usuario encontrado!!!</p>                
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

<div class="modal fade" id="modal-add-user" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Registrar um novo membro</h4>
            </div>
            <div class="modal-body">
                <div class="register-box-body">
                    <form action="{{ route('profiles.create') }}" method="post">
                        {!! csrf_field() !!}
                            
                        <div class="form-group has-feedback ">
                            <input type="text" name="name" class="form-control" value="" placeholder="Nome completo">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback ">
                            <input type="email" name="email" class="form-control" value="" placeholder="Email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback ">
                            <input type="password" name="password" class="form-control" placeholder="Senha">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback ">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Repita a senha">
                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>

@stop