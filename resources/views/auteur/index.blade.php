@extends('layout.app')

@section('content')
    <h2>Liste des auteurs</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>prenom<th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($auteurs as $auteur)
                <tr>
                    <td>{{ $auteur->id }}</td>
                    <td>{{ $auteur->nom }}</td>
                    <td>{{ $auteur->prenom }}</td>
                    <td>
                        <a href="{{ route('auteur.show', $auteur->id) }}">Voir</a>
                        <a href="{{ route('auteur.edit', $auteur->id) }}">Modifier</a>
                        <form action="{{ route('auteur.destroy') }}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="auteur_id" value="{{ $auteur->id }}">
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection