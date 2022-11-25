@extends('layout.app')

@section('content')
    <h2>Affichage du livre {{ $genre->genre }}</h2>
    <ul>
        <li>{{ $genre->id }}</li>
        <li>{{ $genre->genre }}</li>
        <li>{{ $genre->created_at }}</li>
        <li>{{ $genre->updated_at }}</li>
    </ul>
@endsection