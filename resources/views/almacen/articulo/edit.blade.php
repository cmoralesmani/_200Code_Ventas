@extends('layouts.admin')

@section('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-xs-12">
        <h3>Editar Articulo: {{ $articulo->nombre }}</h3>

        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
<form method="post" action="{{ action('ArticuloController@update',$articulo->id_articulo) }}"
      enctype="multipart/form-data" autocomplete="off">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PATCH"/>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required value="{{ $articulo->nombre }}" class="form-control">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="">Categoria</label>
                <select name="id_categoria" id="" class="form-control">
                    @foreach($categorias as $cat)
                    @if($cat->id_categoria == $articulo->id_categoria)
                    <option value="{{ $cat->id_categoria }}" selected>{{ $cat->nombre }}</option>
                    @else
                    <option value="{{ $cat->id_categoria }}">{{ $cat->nombre }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" required value="{{ $articulo->codigo }}" class="form-control">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" name="stock" required value="{{ $articulo->stock }}" class="form-control">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" value="{{ $articulo->descripcion }}" class="form-control"
                       placeholder="Descripción del artículo...">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="form-control">
                @if(($articulo->imagen) != "")
                <img src="{{ asset('imagenes/articulos/'.$articulo->imagen) }}" alt="" height="300px" width="300px"/>
                @endif
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>
    </div>
</form>
@stop