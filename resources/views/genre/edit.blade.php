@extends('layout.app')

@section('content')
    <h2>Formulaire de modification du genre : {{ $genre->genre }}</h2>
    <form action="{{ route('genre.update', $genre->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="genre">Nom : </label>
        <input type="text" id="genre" name="genre" value="{{ $genre->genre }}">
        <button type="submit">Modifier le genre !</button>
    </form>
@endsection

