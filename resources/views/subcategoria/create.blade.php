@extends('layout.app')
@section('content')
    <a href="{{ route('subcategoria.index') }}">Back</a>
    <form method="POST" action="{{ route('subcategoria.store') }}">
        @csrf
        <label for="categoria">Categoria</label>
        <select name="categoria_id" id="categoria_id">
            @forelse ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
            @empty
            <option value="" disabled> - No Categorys -</option>
            @endforelse
        </select>
        <label for="title">Subcategoria:</label>
        <input type="text" name="name" id="name">
        <label for="note">Descripcion:</label>
        <input type="text" name="description" id="description">
        <input type="submit" value="Guardar">
    </form>
@endsection