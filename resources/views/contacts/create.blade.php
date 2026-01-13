@extends('layouts.app')

@section('content')
<h1>Ajouter un contact</h1>

<form action="{{ route('contacts.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nom :</label>
        <input type="text" name="nom" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Prénom :</label>
        <input type="text" name="prenom" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email :</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Téléphone :</label>
        <input type="text" name="telephone" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">
        Ajouter
    </button>
</form>
@endsection
