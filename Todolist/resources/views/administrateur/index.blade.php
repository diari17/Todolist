<!-- @extends('layouts.app')

@section('content') -->
<!-- <h1>Liste des Tâches</h1>
<a href="{{ route('taches.create') }}">Ajouter une Tâche</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Date Limite</th>
            <th>Projet</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($taches as $tache)
        <tr>
            <td>{{ Auth::tache->IDTache }}</td>
            <td>{{ Auth::tache->titre }}</td>
            <td>{{ Auth::tache->description }}</td>
            <td>{{ Auth::tache->due_date }}</td>
            <td>{{ Auth::tache->projet->NomProjet }}</td>
            <td>
                <a href="{{ route('taches.edit', $tache->IDTache) }}">Modifier</a>
                <form action="{{ route('taches.destroy', $tache->IDTache) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection -->


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des administrateurs</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{ $administrateur->id }}</td>
                        <td>{{ $administrateur->user->NomUser }}</td>
                        <td>{{ $administrateur->user->Email }}</td>
                        <td>{{ $administrateur->Role }}</td>
                        <td>
                            <a href="{{ route('administrateur.edit', $administrateur->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                            <!-- Ajoutez d'autres actions selon les besoins (supprimer, etc.) -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection