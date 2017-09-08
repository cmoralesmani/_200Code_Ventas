@extends('layouts.admin')

@section('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-xs-12">
        <h3>Nuevo Articulo</h3>

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
<form action="{{ url('almacen/articulo') }}" method="post" autocomplete="off" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required value="{{ old('nombre') }}" class="form-control"
                       placeholder="Nombre...">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="">Categoria</label>
                <select name="id_categoria" id="" class="form-control">
                    @foreach($categorias as $cat)
                    <option value="{{ $cat->id_categoria }}">{{ $cat->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" required value="{{ old('codigo') }}" class="form-control"
                       placeholder="Código del artículo...">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" name="stock" required value="{{ old('stock') }}" class="form-control"
                       placeholder="Stock del artículo...">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" value="{{ old('descripcion') }}" class="form-control"
                       placeholder="Descripción del artículo...">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="form-control">
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