@extends('layout.app')
@section('content')
    <a href="{{ route('categoria.index') }}">Back</a>
    <form method="POST" action="{{ route('categoria.store') }}">
        @csrf
        <label for="title">Nombre</label>
        <input type="text" name="name" id="name">
        <label for="note">Descripcion</label>
        <input type="text" name="description" id="description">
        <input type="submit" value="Guardar">
    </form>
@endsection
