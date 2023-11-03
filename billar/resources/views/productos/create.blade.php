@extends('layouts.admin')
        
        @section('contenido')
        <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2>Agregar nuevo producto</h2>
        </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('productos.index') }}"> Volver</a>
        </div>
        </div>
        </div>
        
        
        @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Whoops!</strong> Hubo algunos problemas con su entrada.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
        @endif
        
        
        <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        
        
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Nombre:</strong>
        <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Detalle:</strong>
        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </div>
        
        </form>
        @endsection