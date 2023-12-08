@extends('layout.app')

@section('content')
    <h1>
        Hola desde el index de Subcategorias
    </h1>
    <a href="{{ route('categoria.index') }}">back</a> |
    <a href="{{ route('subcategoria.create') }}">Crear subcategoria</a>
    <br>
    @forelse ($subcategorias as $subcategoria)
        <li>
            <h2><b>Subcategoria:</b> {{ $subcategoria->name }}</h2>
            <p><b>Descripcion:</b> {{ $subcategoria->description }}</p>
            <p> <b>Categoria:</b> {{ $subcategoria->categoria->name }}</p>
        </li>
    @empty
        <li>No Subcategory on our DB</li>
    @endforelse
@endsection
