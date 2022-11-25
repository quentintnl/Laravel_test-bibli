@extends('layout.app')

@section('content')
    <h2>Formulaire de création d'un auteur</h2>
    <form action= "{{route('auteur.store')}}" method="POST">
        @csrf
        <label for="nom">Nom : </label>
        <input type="text" id="nom" name="nom">
        <label for="prenom"> Prenom : </label>
        <input type="text" id="prenom" name="prenom">
        <button type="submit">Créer l'auteur !</button>
    </form>
@endsection 