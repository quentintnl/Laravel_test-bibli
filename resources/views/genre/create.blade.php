@extends('layout.app')

@section('content')
    <h2>Formulaire de création du genre</h2>
    <form action="{{ route('genre.store') }}" method="POST">
        @csrf
        <label for="genre">Nom du genre : </label>
        <input type="text" id="genre" name="genre">
        <button type="submit">Créer du genre !</button>
    </form>
@endsection