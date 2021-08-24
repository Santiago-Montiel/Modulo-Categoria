@extends('layout')
@section('title', ' Inventory App ')
@section('encabezado', $category->id ? 'Actualizar categoria' : 'Registrar categoria')
@section('content')

    
    <form class="row g-3 col-md-8" id="form-add_Product" action="{{ route('category.save') }}" method="POST">
        @csrf

        <input type="hidden" name="idCategory" id="idCategory" value="{{ $category->id ? $category->id : 0 }}">

        <div class="col-md-12">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" placeholder="Digite el nombre de la categoria" id="nombre" name="nombre"
                value="{{ $category->name ? $category->name : old('name') }}">
        </div>
        <div class="col-md-12">
            @error('nombre')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md-12">
            <label for="description" class="form-label">Descripcion:</label>
            <textarea class="form-control" name="description" id="description" placeholder="Descripción de categoria">
                    {{ $category->description ? $category->description : old('description') }}
                </textarea>
        </div>
        <div class="col-md-12">
            @error('description')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        
        <div class="col-12">
            <a href="{{ route('category.getAll') }}" class="btn btn-primary" >Lista categorias</a>
            <button type="submit"
                class="btn btn-success">{{ $category->id ? 'Actualizar categoria' : 'Agregar categoria' }}</button>
        </div>
    </form>
@endsection
