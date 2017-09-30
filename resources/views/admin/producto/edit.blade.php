@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTOS <small>[Editar producto]</small>
			</h1>
		</div>
		{!!Form::model($producto,['method'=>'PATCH','route'=>['producto.update',$producto->id],'files'=>'true'])!!}
		{{Form::token()}}
		<div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">



                  <div class="form-group">
                      <label for="name">Nombre:</label>

                    <input type="text" name="nombre" value="{{$producto->nombre}}" class="form-control" placeholder="Nombre....">
                  </div>

                  <div class="form-group">
                      <label for="description">Descripción:</label>

                 <input type="text" name="descripcion" value="{{$producto->descripcion}}" class="form-control" placeholder="Descripcion....">
                  </div>

                  <div class="form-group">
                      <label for="extract">Extracto:</label>

                  <input type="text" name="extracto" value="{{$producto->extracto}}" class="form-control" placeholder="Extracto....">
                  </div>



                  <div class="form-group">
                      <label for="price">Caracteristicas:</label>
         <input type="text" name="caracteristicas" class="form-control" value="{{$producto->caracteristicas}}" placeholder="Caracteristicas...">
                  </div>

                  <div class="form-group">
                      <label for="price">Precio:</label>
         <input type="number" name="precio" class="form-control" value="{{$producto->precio}}" placeholder="Precio....">
                  </div>

                  <div class="form-group">
                      <label for="image">Imagen:</label>
                   <input type="text" name="imagen" class="form-control" value="{{$producto->imagen}}" placeholder="URL Imagen....">

                  </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ url()->previous()  }}" class="btn btn-warning">Cancelar</a>
                        </div>



                </div>

            </div>
        </div>


	</div>
{!!Form::close()!!}
@stop
