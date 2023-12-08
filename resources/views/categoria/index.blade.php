@extends('layout.app')

@section('content')
    <h1>
        Hola desde el index de Categorias
    </h1>
    <a href="{{ route('subcategoria.index') }}">Subcategorias</a> |
    <a href="{{ route('categoria.create') }}">Crear categoria</a>
    <br>
    @forelse ($categorias as $categoria)
        <li>
            <p>
                {{ $categoria->name }}
            </p>
            <p>
                {{ $categoria->description }}
            </p>
        </li>
    @empty
        <li>No Categorys on our DB</li>
    @endforelse
@endsection
