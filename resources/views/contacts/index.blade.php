@extends('layouts.app')

@section('content')
<h1>Liste des contacts</h1>

<a href="{{ route('contacts.create') }}" class="btn btn-success mb-3">
    Ajouter un contact
</a>

<!-- Formulaire de recherche -->
<form action="{{ route('contacts.index') }}" method="GET" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Rechercher un contact..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Rechercher</button>
    </div>
</form>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->nom }}</td>
            <td>{{ $contact->prenom }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->telephone }}</td>
            <td>
                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary btn-sm">
                    Modifier
                </a>

                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                        Supprimer
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
