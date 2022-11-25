@extends('layout.app')

@section('content')
    <h2>Formulaire de modification de l'auteur : {{ $auteur->nom }} {{ $auteur->prenom }}</h2>
    <form action="{{ route('auteur.update', $auteur->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="nom">Nom : </label>
        <input type="text" id="nom" name="nom" value="{{ $auteur->nom }}">
        <label for="prenom">Prenom : </label>
        <input type="text" id="prenom" name="prenom" value="{{ $auteur->prenom }}">
        <button type="submit">Modifier l'auteur !</button>
    </form>
@endsection
