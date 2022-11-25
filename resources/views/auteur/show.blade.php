@extends('layout.app')

@section('content')
    <h2>Affichage du livre {{ $auteur->name }}</h2>
    <ul>
        <li>{{ $auteur->id }}</li>
        <li>{{ $auteur->nom }}</li>
        <li>{{ $auteur->prenom }}</li>
        <li>{{ $auteur->created_at }}</li>
        <li>{{ $auteur->updated_at }}</li>
    </ul>
@endsection