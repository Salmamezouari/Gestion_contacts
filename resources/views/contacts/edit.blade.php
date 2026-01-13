@extends('layouts.app')

@section('content')
<h1>Modifier le contact</h1>

<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nom :</label>
        <input type="text" name="nom" class="form-control"
               value="{{ old('nom', $contact->nom) }}" required>
    </div>

    <div class="mb-3">
        <label>Prénom :</label>
        <input type="text" name="prenom" class="form-control"
               value="{{ old('prenom', $contact->prenom) }}" required>
    </div>

    <div class="mb-3">
        <label>Email :</label>
        <input type="email" name="email" class="form-control"
               value="{{ old('email', $contact->email) }}" required>
    </div>

    <div class="mb-3">
        <label>Téléphone :</label>
        <input type="text" name="telephone" class="form-control"
               value="{{ old('telephone', $contact->telephone) }}">
    </div>

    <button type="submit" class="btn btn-primary">
        Mettre à jour
    </button>
</form>
@endsection
