@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTOS
				<a href="producto/create" class="btn btn-warning">
					<i class="fa fa-plus-circle"></i> Producto
				</a>
			</h1>
		</div>
		<div class="page">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Imagen</th>
                            <th>Nombre</th>

                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Modelo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $producto)
                            <tr>
                                <td>
                                    <a href="{{URL::action('Admin\ProductController@edit',$producto->id)}}" class="btn btn-primary">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>
																<td>
									                <a href="{{URL::action('Admin\ProductController@destroy',$producto->id)}}" class="btn btn-danger">
									                  <i class="fa fa-trash-o"></i>

									             </td>
                                <td><img src="{{ $producto->imagen }}" width="40"></td>
                                <td>{{ $producto->nombre }}</td>

                                <td>{{ $producto->descripcion }}</td>
                                <td>${{ number_format($producto->precio,2) }}</td>
                                <td>{{ $producto->extracto }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <hr>



        </div>

	</div>

@stop
