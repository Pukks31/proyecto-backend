@extends('layouts.admin')

        @section('contenido')
        <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2>Productos</h2>
        </div>
        <div class="pull-right">
        @can('product-create')
        <a class="btn btn-success" href="{{ route('productos.create') }}"> Crear Nuevo Producto</a>
        @endcan
        </div>
        </div>
        </div>


        @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
        @endif


        <table class="table table-bordered">
        <tr>
        <th>No</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th width="280px">Accion</th>
        </tr>
        @foreach ($products as $product)
        <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->nombre }}</td>
        <td>{{ $product->precio }}</td>
        <td>
        <form action="{{ route('productos.destroy',$product->id) }}" method="POST">
        <a class="btn btn-info" href="{{ route('productos.show',$product->id) }}">Ver</a>
        @can('product-edit')
        <a class="btn btn-primary" href="{{ route('productos.edit',$product->id) }}">Editar</a>
        @endcan


        @csrf
        @method('DELETE')
        @can('product-delete')
        <button type="submit" class="btn btn-danger">Borrar</button>
        @endcan
        </form>
        </td>
        </tr>
        @endforeach
        </table>


        {!! $products->links() !!}


        @endsection