@extends('home.template')
@section('content')


<title>@yield('Foro')</title>


  <div class="video-responsive">
  <iframe src="https://www.youtube.com/embed/oOaCp59JDkU" frameborder="0" allowfullscreen></iframe>
  </div>

  <div class="row" id='row-contacto'>
    <div class="col-sm-6">
      <h1>Testimonios Compartidos</h1>
    </div>

    <div class="col-sm-6">
      <h1>Compartir Testimonio>></h1>
    </div>

  </div>
  <div class="container">
    @foreach($mensajes as $mensaje)
  <div class="row" id=row-contacto2>
    <div class="col-sm-6">
      <h1>{{$mensaje->titulo}}</h1>
      <h2>{{$mensaje->fecha}}</h2>
      <p>{{$mensaje->mensaje}}</p>
      <a href="#">Leer más</a>
    </div>

    <div class="col-sm-6">
      <h1>{{$mensaje->titulo}}</h1>
      <h2>{{$mensaje->fecha}}</h2>
      <p>{{$mensaje->mensaje}}</p>
      <a href="#">Leer más</a>
    </div>

  </div>
    @endforeach



  <div class="page">






  {!! Form::open(['action'=>'MensajeController@store']) !!}

          <div class="form-group">
              <label for="name">Titulo:</label>

            <input type="text" name="nombre" class="form-control" placeholder="Titulo....">
          </div>

          <div class="form-group">
              <label for="description">Mensaje:</label>

         <input type="text" name="descripcion" class="form-control" placeholder="Mensaje....">
          </div>


          <div class="form-group">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="/admin/producto" class="">Cancelar</a>
          </div>


                              {!! Form::close() !!}

  </div>



</div>

@stop
