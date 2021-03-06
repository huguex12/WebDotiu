@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-rocket"></i> DotiU™ - ADMINISTRADOR</h1>
        </div>

        <h2>Bienvenido(a) {{ Auth::user()->name  }} {{ Auth::user()->last_name }} al Panel de administración de Pagina Web.</h2><hr>

        <div class="row">

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="/admin/categoria" class="btn btn-warning btn-block btn-home-admin">FORO ABUSO</a>
                </div>
            </div>



            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-users  icon-home"></i>
                    <a href="/admin/usuario" class="btn btn-warning btn-block btn-home-admin">USUARIOS</a>
                </div>
            </div>


        </div>

    </div>
    <hr>

@stop
