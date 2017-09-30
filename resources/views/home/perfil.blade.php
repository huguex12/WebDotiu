@extends('home.template')

@section('content')

<div class="container text-center">


<h1><i class="fa fa-user-circle 2x"></i>&nbsp Perfil del Usuario</h1>


<div class="row">

<div class="col-md-6">
  <div class="product-block">
  <img src="/img/fabio.jpg" width="50%" alt="">
</div>
</div>



<div class="col-md-6">
  <div class="product-info panel" id='info'>
  <h1>Nombre: Fabio Diaz</h1> <i class=""> </i>
  <p>Usuario: fepd15</p> <i class="fa fa-pencil 2x"></i>
  <p>Direccion: Esparza, Puntarenas</p>
  <p>Fecha de Ingreso: 15/09/2017</p>



  </div>
</div>
</div>



<p><a class="btn btn-primary" id='botonInfo' href="{{'http://localhost:8000/'}}"> <i class="fa fa-chevron-circle-left"></i>&nbsp Regresar</a></p>
</div>
@stop
