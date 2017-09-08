@extends('layouts.admin')

@section('contenido')

    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <h3>Editar Categoría: {{ $categoria->nombre }}</h3>

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ URL::action('CategoriaController@update',[ 'id' => $categoria->id_categoria]) }}"  method="patch" autocomplete="off">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre..." value="{{ $categoria->nombre }}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion" class="form-control" placeholder="Descripción..." value="{{ $categoria->descripcion }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
@stop